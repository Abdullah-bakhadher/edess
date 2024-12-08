<?php

use App\Http\Controllers\ReferralController;

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
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/', function () {
	return redirect('/home');
});

Route::post('/referrals', [ReferralController::class, 'addReferral'])->name('referrals.add');
Route::middleware(['auth'])->group(function () {
	Route::get('/home', 'MainController@home')->name('home');
});

Route::get('/add_referral', 'MainController@add_referral')->name('add_referral');
Route::get('/referral_statistics', 'MainController@referral_statistics')->name('referral_statistics');

// In routes/web.php
