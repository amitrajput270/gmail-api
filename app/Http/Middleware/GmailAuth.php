<?php

namespace App\Http\Middleware;

use Closure;
use Dacastro4\LaravelGmail\Facade\LaravelGmail;

class GmailAuth
{
    public function handle($request, Closure $next)
    {
        if (!LaravelGmail::check()) {
            return redirect()->route('oauth/gmail');
        }
        if (LaravelGmail::check()) {
            $filePath = config('gmail.client_credentials_path');
            // if file does not exist then create file
            if (!\Storage::disk('local')->exists($filePath)) {
                \Storage::disk('local')->put($filePath, '');
            }
            if (\Storage::disk('local')->get($filePath) == '') {
                $accessToken = LaravelGmail::getAccessToken();
                if (LaravelGmail::isAccessTokenExpired()) {
                    $accessToken = LaravelGmail::refreshToken();
                }
                // save access token in file for future use
                \Storage::disk('local')->put($filePath, json_encode($accessToken));
            }
            $accessToken = json_decode(\Storage::disk('local')->get($filePath), true);
            LaravelGmail::setAccessToken($accessToken);
        }
        return $next($request);
    }
}
