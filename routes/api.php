<?php

use App\Http\Controllers\GmailController;
use App\Http\Controllers\SibController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// gmail api
Route::prefix('gmail')->group(function () {
    Route::get('reply', [GmailController::class, 'reply']);
    Route::get('send', [GmailController::class, 'send']);
    Route::any('allInboxEmails', [GmailController::class, 'allInboxEmails']);
    Route::get('logout', [GmailController::class, 'logout']);
    Route::get('login', [GmailController::class, 'login']);
});

Route::any('/employees/getChildNodes', [SibController::class, 'getChildNodes']);
Route::any('/employees/getParentNodes', [SibController::class, 'getParentNodes']);
Route::any('employees/calculateCtc', [SibController::class, 'calculateCtc']);

// Route::view('/docs', 'scribe.index')->name('scribe');
// Route::view('/admin/docs', 'scribe_admin.index')->name('scribe-admin');
