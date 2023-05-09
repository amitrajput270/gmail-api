<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GmailController;
use App\Http\Controllers\CommentController;
use Dacastro4\LaravelGmail\Facade\LaravelGmail;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::prefix('gmail')->group(function () {
    Route::get('inbox', [GmailController::class, 'index']);
    Route::any('compose', [GmailController::class, 'compose']);
    Route::any('reply', [GmailController::class, 'reply']);
    Route::any('send', [GmailController::class, 'send']);
    Route::any('allInboxEmails', [GmailController::class, 'allInboxEmails']);
});

Route::get('chat', [ChatController::class,'index'])->name('chat');
Route::get('message/{id}', [ChatController::class,'getMessage'])->name('message');
Route::post('message', [ChatController::class,'sendMessage'])->name('send.message');

Route::get('post', [PostController::class,'create'])->name('post.create');
Route::post('post', [PostController::class,'store'])->name('post.store');
Route::get('posts', [PostController::class,'index'])->name('posts');
Route::get('article/{post:slug}', [PostController::class,'show'])->name('post.show');
Route::post('comment/store', [CommentController::class,'store'])->name('comment.add');
Route::post('reply/store', [CommentController::class,'replyStore'])->name('reply.add');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// gmail api routes
Route::get('oauth/gmail', function () {
    return LaravelGmail::redirect();
});

Route::get('oauth/gmail/callback', function () {
    LaravelGmail::makeToken();
    // save credentials to file
    $filePath = config('app.clientCredentialsPath');
    if (!\Storage::disk('local')->exists($filePath)) {
        \Storage::disk('local')->put($filePath, json_encode(LaravelGmail::getAccessToken()));
    }
    return redirect()->to('/');
});

Route::get('oauth/gmail/logout', function () {
    LaravelGmail::logout(); //It returns exception if fails
    // delete credentials file
    $filePath = config('app.clientCredentialsPath');
    if (\Storage::disk('local')->exists($filePath)) {
        \Storage::disk('local')->delete($filePath);
    }
    return redirect()->to('/');
});




