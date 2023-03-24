<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// gmail api routes
Route::prefix('gmail')->group(function () {
    Route::get('inbox', [\App\Http\Controllers\GmailController::class, 'index']);
    Route::any('compose', [\App\Http\Controllers\GmailController::class, 'compose']);
    Route::any('reply', [\App\Http\Controllers\GmailController::class, 'reply']);
    Route::any('send', [\App\Http\Controllers\GmailController::class, 'send']);
    Route::any('allInboxEmails', [\App\Http\Controllers\GmailController::class, 'allInboxEmails']);
});

// gmail oauth routes for authentication
Route::get('oauth/gmail', function () {
    return LaravelGmail::redirect();
});
Route::get('oauth/gmail/callback', function () {
    LaravelGmail::makeToken();
    // save credentials to file
    $filePath = config('gmail.client_credentials_path');
    if (!\Storage::disk('local')->exists($filePath)) {
        \Storage::disk('local')->put($filePath, json_encode(LaravelGmail::getAccessToken()));
    }
    return redirect()->to('/');
});
Route::get('oauth/gmail/logout', function () {
    LaravelGmail::logout(); //It returns exception if fails
    // delete credentials file
    $filePath = config('gmail.client_credentials_path');
    if (\Storage::disk('local')->exists($filePath)) {
        \Storage::disk('local')->delete($filePath);
    }
    return redirect()->to('/');
});
