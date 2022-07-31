<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Website\HomePageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/welcome',function(){
    return view('welcome');
});
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['register' => false]);

Route::controller(App\Http\Controllers\Auth\EmailVerificationController::class)
->group(function () {
    Route::get('/email/verify', 'verify')->middleware('auth')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'verify_signature')->middleware(['auth', 'signed'])->name('verification.verify');
    Route::post('/email/verification-notification','verification_notification')->middleware(['auth', 'throttle:6,1'])->name('verification.resend');
});

Route::group(['namespace'=>'App\Http\Controllers\Auth','middleware' => ['auth','verified']], function () {
    Route::get('2fa','User2FACodeController@index')->name('2fa.index');
    Route::post('2fa','User2FACodeController@store')->name('2fa.post');
    Route::get('2fa/reset','User2FACodeController@resend')->name('2fa.resend');
});


Route::group(['namespace'=>'App\Http\Controllers\Website'], function () {
    Route::get('/','HomePageController@home')->name('website.home');
    Route::get('servicedetail', 'HomePageController@serviceDetail')->name('servicedetail');
});
