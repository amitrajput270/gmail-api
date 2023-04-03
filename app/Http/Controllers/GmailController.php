<?php

namespace App\Http\Controllers;

use Dacastro4\LaravelGmail\Facade\LaravelGmail;
use Dacastro4\LaravelGmail\Services\Message\Mail;
use Google\Client;

class GmailController extends Controller
{
    private $accessToken = [];

    public function __construct()
    {
        if (\Storage::disk('local')->exists(config('app.clientCredentialsPath'))) {
            $this->accessToken = json_decode(\Storage::disk('local')->get(config('app.clientCredentialsPath')), true);
        }
    }

    public function generateAccessToken()
    {
        try {
            $client = new Client();
            $client->setApplicationName('Gmail API PHP Quickstart');
            $client->setScopes(config('gmail.additional_scopes'));
            $client->setAuthConfig(storage_path('app') . '/' . config('app.clientSecretPath'));
            $client->setAccessType('offline');
            $client->setPrompt('select_account consent');
            $client->setAccessToken($this->accessToken);
            if ($client->isAccessTokenExpired()) {
                // Refresh the token if possible, else fetch a new one.
                if ($client->getRefreshToken()) {
                    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                } else {
                    // Request authorization from the user.
                    $authUrl = $client->createAuthUrl();
                    return response()->json([
                        'statusCode' => 'ERR',
                        'status' => 'Please click on the link to generate access token',
                        'data' => $authUrl,
                    ]);
                }
                // Save the token to a file.
                if (!file_exists(dirname(\Storage::disk('local')->exists(config('app.clientCredentialsPath'))))) {
                    mkdir(dirname(\Storage::disk('local')->exists(config('app.clientCredentialsPath'))), 0700, true);
                }
                \Storage::disk('local')->put(config('app.clientCredentialsPath'), json_encode($client->getAccessToken()));
            }
            return response()->json([
                'statusCode' => 'TXN',
                'status' => 'Access token generated successfully',
                'data' => $client->getAccessToken(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $e->getMessage(),
                'data' => $e->getTraceAsString(),
            ]);
        }
    }

    public function index()
    {
        try {
            $responseData['labels'] = ['inbox', 'sent'];
            $getAllMessagesResponse = $this->getAllMessages(['label' => 'INBOX']);
            if ($getAllMessagesResponse->getStatusCode() != 200 || $getAllMessagesResponse->getData()->statusCode != 'TXN') {
                return response()->json([
                    'statusCode' => 'ERR',
                    'status' => $getAllMessagesResponse->getData()->status,
                ]);
            }
            $inboxMessagesData = $getAllMessagesResponse->getData()->data;
            $responseData['messages'] = $inboxMessagesData;
            return response()->json([
                'statusCode' => 'TXN',
                'status' => 'Emails fetched successfully',
                'data' => $responseData,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $e->getMessage(),
                'data' => $e->getTraceAsString(),
            ]);
        }
    }

    private function getAllMessages($parameters = [])
    {
        $validator = \Validator::make($parameters, [
            'label' => 'required|in:INBOX,SENT',
        ], [
            'label.in' => 'Please select valid label between ' . implode(',', ['INBOX', 'SENT']),
        ]);
        if ($validator->fails()) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $validator->errors()->first(),
            ]);
        }
        $validatorData = $validator->validate();
        try {
            $response = [];
            $mailAttachments = [];
            $messages = LaravelGmail::message()->in($validatorData['label'])->all();
            foreach ($messages as $message) {
                $mail = LaravelGmail::message()->get($message->getId());
                $mailHeaders = $mail->getHeaders();
                $id = $mail->getId();
                $threadId = $mail->getThreadId();
                $labales = $mail->getLabels();
                $subject = $mail->getSubject();
                $form = $mail->getFrom();
                $to = $mail->getTo();
                $receiver = $mail->getDeliveredTo();
                $getPlainTextBody = $mail->getPlainTextBody();
                $getHtmlBody = $mail->getHtmlBody();
                $getRawPlainTextBody = $mail->getRawPlainTextBody();
                if ($mail->hasAttachments()) {
                    $attachments = $mail->getAttachments();
                    foreach ($attachments as $attachment) {
                        $attachmentId = $attachment->getId();
                        $attachmentName = $attachment->getFileName();
                        $attachmentType = $attachment->getMimeType();
                        $attachmentSize = $attachment->getSize();
                        $saveAttachment = $attachment->saveAttachmentTo('public/attachments/gmail/' . $id);
                        $mailAttachments[] = [
                            'id' => $attachmentId,
                            'name' => $attachmentName,
                            'type' => $attachmentType,
                            'size' => round($attachmentSize / 1024, 2) . ' KB',
                            'saveAttachment' => $saveAttachment,
                        ];
                    }
                }
                $response[] = [
                    'id' => $id,
                    'threadId' => $threadId,
                    'labale' => $labales,
                    'subject' => $subject,
                    'form' => $form,
                    'to' => $to,
                    'receiver' => $receiver,
                    'getPlainTextBody' => $getPlainTextBody,
                    'getHtmlBody' => $getHtmlBody,
                    'getRawPlainTextBody' => $getRawPlainTextBody,
                    'headers' => $mailHeaders,
                    'attachments' => $mailAttachments,
                ];
            }
            return response()->json([
                'statusCode' => 'TXN',
                'status' => 'Emails fetched successfully',
                'data' => $response,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $e->getMessage(),
                'data' => $e->getTraceAsString(),
            ]);
        }
    }

    public function compose()
    {
        $validator = \Validator::make(request()->all(), [
            'to' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $validator->errors()->first(),
            ]);
        }
        try {
            $from = LaravelGmail::user();
            $to = request('to');
            $subject = request('subject');
            $message = request('message');
            $attachments = request('attachments');
            $mail = new Mail;
            $mail->to($to);
            $mail->from($from);
            $mail->subject($subject);
            $mail->message($message);
            if ($attachments) {
                foreach ($attachments as $attachment) {
                    $mail->attach($attachment);
                }
            }
            $isMailed = $mail->send();
            return response()->json([
                'statusCode' => 'TXN',
                'status' => 'Email sent successfully',
                'data' => [
                    'id' => $isMailed->getId(),
                    'threadId' => $isMailed->getThreadId(),
                    'labale' => $isMailed->getLabels(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $e->getMessage(),
                'data' => $e->getTraceAsString(),
            ]);
        }
    }

    public function reply()
    {
        // $this->generateAccessToken();
        $validator = \Validator::make(request()->all(), [
            'id' => 'required',
            'threadId' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $validator->errors()->first(),
            ]);
        }
        $vadatedData = $validator->validated();
        try {
            $client = new Client();
            $client->setAccessToken($this->accessToken);
            if ($client->isAccessTokenExpired()) {
                return response()->json([
                    'statusCode' => 'ERR',
                    'status' => 'Token expired',
                ]);
            }
            $service = new \Google_Service_Gmail($client);
            $token = $this->accessToken['access_token'];
            $httpCall = \Http::withHeaders(
                [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ]
            )->get('https://www.googleapis.com/gmail/v1/users/me/messages/' . $vadatedData['id'] . '?format=metadata&metadataHeaders=In-Reply-To&metadataHeaders=References&metadataHeaders=Message-ID&metadataHeaders=Subject&metadataHeaders=From&fields=payload%2Fheaders');
            $response = $httpCall->json();
            $collectResponse = collect($response['payload']['headers']);
            $messageId = $collectResponse->where('name', 'Message-ID')->first()['value'];
            $subject = $collectResponse->where('name', 'Subject')->first()['value'];
            $sender = $collectResponse->where('name', 'From')->first()['value'];
            $references = $collectResponse->where('name', 'References')->first()['value'];
            $inReplyTo = $collectResponse->where('name', 'In-Reply-To')->first()['value'];
            $user = 'me';
            // reply with the same thread using RFC 2822  format
            $msg = new \Google_Service_Gmail_Message();
            $from = 'me';
            $rawMessage = "From: $from\r\n";
            $rawMessage .= "To: $sender\r\n";
            $rawMessage .= 'Subject: =?utf-8?B?' . base64_encode($subject) . "?=\r\n";
            $rawMessage .= "Date: " . date('r') . "\r\n";
            $rawMessage .= "Message-Id: " . $messageId . ">\r\n";
            $rawMessage .= 'References: ' . $references . ">\r\n";
            $rawMessage .= "In-Reply-To:" . $inReplyTo . ">\r\n";
            $rawMessage .= "threadId: " . $vadatedData['threadId'] . "\r\n";
            $rawMessage .= "MIME-Version: 1.0\r\n";
            $rawMessage .= "Content-Type: text/html; charset=utf-8\r\n";
            $rawMessage .= 'Content-Transfer-Encoding: quoted-printable' . "\r\n\r\n";
            $rawMessage .= $vadatedData['message'];
            $rawMessage = rtrim(strtr(base64_encode($rawMessage), '+/', '-_'), '=');
            $msg->setRaw($rawMessage);
            $isMailed = $service->users_messages->send($user, $msg);
            return response()->json([
                'statusCode' => 'TXN',
                'status' => 'Reply sent successfully with the sender ' . $sender,
                'data' => [
                    'id' => $isMailed->getId(),
                    'threadId' => $isMailed->getThreadId(),
                    'subject' => $subject,
                    'to' => $sender,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $e->getMessage(),
                'data' => $e->getTraceAsString(),
            ]);
        }
    }

    public function send()
    {
        // $this->generateAccessToken();
        $validator = \Validator::make(request()->all(), [
            'to' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $validator->errors()->first(),
            ]);
        }
        $vadatedData = $validator->validated();
        try {
            $client = new Client();
            $client->setAccessToken($this->accessToken);
            if ($client->isAccessTokenExpired()) {
                return response()->json([
                    'statusCode' => 'ERR',
                    'status' => 'Token expired',
                ]);
            }
            $service = new \Google_Service_Gmail($client);
            $from = 'me';
            $to = $vadatedData['to'];
            $subject = $vadatedData['subject'];
            $message = $vadatedData['message'];

            $msg = new \Google_Service_Gmail_Message();
            $rawMessage = "From: $from\r\n";
            $rawMessage .= "To: $to\r\n";
            $rawMessage .= 'Subject: =?utf-8?B?' . base64_encode($subject) . "?=\r\n";
            $rawMessage .= "Date: " . date('r') . "\r\n";
            $rawMessage .= "MIME-Version: 1.0\r\n";
            $rawMessage .= "Content-Type: text/html; charset=utf-8\r\n";
            $rawMessage .= 'Content-Transfer-Encoding: quoted-printable' . "\r\n\r\n";
            $rawMessage .= $message;
            $rawMessage = rtrim(strtr(base64_encode($rawMessage), '+/', '-_'), '=');
            $msg->setRaw($rawMessage);
            $isMailed = $service->users_messages->send('me', $msg);
            return response()->json([
                'statusCode' => 'TXN',
                'status' => 'Mail sent successfully to ' . $to,
                'data' => [
                    'id' => $isMailed->getId(),
                    'threadId' => $isMailed->getThreadId(),
                    'subject' => $subject,
                    'to' => $to,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $e->getMessage(),
                'data' => $e->getTraceAsString(),
            ]);
        }
    }

    public function allInboxEmails()
    {
        $this->generateAccessToken();
        try {
            $client = new Client();
            $client->setAccessToken($this->accessToken);
            if ($client->isAccessTokenExpired()) {
                return response()->json([
                    'statusCode' => 'ERR',
                    'status' => 'Token expired',
                ]);
            }
            $service = new \Google_Service_Gmail($client);
            $user = 'me';
            $optParams = [
                'maxResults' => 100,
                'labelIds' => 'INBOX',
                'includeSpamTrash' => false,
                // 'q' => 'is:unread',
            ];
            $results = $service->users_messages->listUsersMessages($user, $optParams);
            $messages = $results->getMessages();
            $emails = [];
            if (count($messages) > 0) {
                foreach ($messages as $message) {
                    $msg = $service->users_messages->get($user, $message->id);
                    // get body of message
                    $getBody = $service->users_messages->get($user, $message->id, ['format' => 'full']);

                    $payload = $msg->getPayload();
                    $headers = $payload->getHeaders();
                    $from = '';
                    $subject = '';
                    $date = '';
                    $messageId = '';
                    $references = '';
                    $inReplyTo = '';
                    foreach ($headers as $val) {
                        if ($val->name == 'From') {
                            $from = $val->value;
                        }
                        if ($val->name == 'Subject') {
                            $subject = $val->value;
                        }
                        if ($val->name == 'Date') {
                            $date = $val->value;
                        }
                        if ($val->name == 'Message-ID') {
                            $messageId = $val->value;
                        }
                        if ($val->name == 'References') {
                            $references = $val->value;
                        }
                        if ($val->name == 'In-Reply-To') {
                            $inReplyTo = $val->value;
                        }
                    }
                    // get all attachments and save them
                    $attachments = [];
                    $parts = $payload->getParts();
                    if (count($parts) > 0) {
                        foreach ($parts as $part) {
                            $filename = '';
                            $attId = '';
                            $data = '';
                            $fileSize = '';
                            $fileType = '';
                            $attachmentId = $part->getBody()->getAttachmentId();
                            if (isset($attachmentId)) {
                                $att = $service->users_messages_attachments->get($user, $message->id, $attachmentId);
                                $data = $att->getData();
                                $fileSize = $att->getSize();
                                $filename = $part->getFilename();
                                $fileType = $part->getMimeType();
                                $attId = $part->getBody()->getAttachmentId();
                                if ($filename && $attId) {
                                    $file = $service->users_messages_attachments->get($user, $message->id, $attId);
                                    $data = $file->getData();
                                    $data = strtr($data, ['-' => '+', '_' => '/']);
                                    $decodedData = base64_decode($data);
                                    $path = public_path('storage/attachments/gmail/' . $message->id);
                                    if (!file_exists($path)) {
                                        mkdir($path, 0777, true);
                                    }
                                    $file = $path . '/' . $filename;
                                    $fp = fopen($file, "w+");
                                    fwrite($fp, $decodedData);
                                    fclose($fp);
                                }
                                $attachments[] = [
                                    'filename' => $filename,
                                    'fileType' => $fileType,
                                    'fileSize' => round($fileSize / 1024, 2) . ' KB',
                                ];
                            }
                        }
                    }

                    $emails[] = [
                        'id' => $msg->getId(),
                        'threadId' => $msg->getThreadId(),
                        'from' => $from,
                        'subject' => $subject,
                        'date' => $date,
                        // 'messageId' => $messageId,
                        // 'references' => $references,
                        // 'inReplyTo' => $inReplyTo,
                        'snippet' => $msg->getSnippet(),
                        'attachments' => $attachments,
                    ];
                }
            }
            return response()->json([
                'statusCode' => 'TXN',
                'status' => 'All inbox emails',
                'data' => $emails,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $e->getMessage(),
                'data' => $e->getTraceAsString(),
            ]);
        }
    }

    public function logout()
    {
        $this->generateAccessToken();
        try {
            $client = new Client();
            $client->setAccessToken($this->accessToken);
            if ($client->isAccessTokenExpired()) {
                return response()->json([
                    'statusCode' => 'ERR',
                    'status' => 'Token expired',
                ]);
            }
            $client->revokeToken();
            return response()->json([
                'statusCode' => 'TXN',
                'status' => 'Logged out successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => $e->getMessage(),
                'data' => $e->getTraceAsString(),
            ]);
        }
    }

    public function login()
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('app') . '/' . config('app.clientSecretPath'));
        $client->setRedirectUri('http: //127.0.0.1:8000/oauth/gmail/callback');
        $client->addScope(\Google_Service_Gmail::GMAIL_READONLY);
        $client->addScope(\Google_Service_Gmail::GMAIL_SEND);
        $client->addScope(\Google_Service_Gmail::GMAIL_COMPOSE);
        $client->addScope(\Google_Service_Gmail::GMAIL_MODIFY);
        $client->addScope(\Google_Service_Gmail::GMAIL_LABELS);
        $client->addScope(\Google_Service_Gmail::GMAIL_METADATA);
        $client->addScope(\Google_Service_Gmail::GMAIL_SETTINGS_BASIC);
        $client->addScope(\Google_Service_Gmail::GMAIL_SETTINGS_SHARING);
        $client->setAccessType('offline');
        $client->setApprovalPrompt('force');
        $authUrl = $client->createAuthUrl();
        return redirect($authUrl);
    }
}
