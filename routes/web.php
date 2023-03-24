<?php

use App\Http\Controllers\GmailController;
use App\Http\Controllers\HomeController;
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

Route::prefix('gmail')->group(function () {
    Route::get('inbox', [GmailController::class, 'index']);
    Route::any('compose', [GmailController::class, 'compose']);
    Route::any('reply', [GmailController::class, 'reply']);
    Route::any('send', [GmailController::class, 'send']);
    Route::any('allInboxEmails', [GmailController::class, 'allInboxEmails']);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// gmail api routes
Route::get('oauth/gmail', function () {
    return LaravelGmail::redirect();
});
Route::get('oauth/gmail/callback', function () {
    LaravelGmail::makeToken();
    // save credentials to file
    $filePath = 'gmail/tokens/credentials.json';
    if (!\Storage::disk('local')->exists($filePath)) {
        \Storage::disk('local')->put($filePath, json_encode(LaravelGmail::getAccessToken()));
    }
    return redirect()->to('/');
});
Route::get('oauth/gmail/logout', function () {
    LaravelGmail::logout(); //It returns exception if fails
    // delete credentials file
    $filePath = 'gmail/tokens/credentials.json';
    if (\Storage::disk('local')->exists($filePath)) {
        \Storage::disk('local')->delete($filePath);
    }
    return redirect()->to('/');
});
