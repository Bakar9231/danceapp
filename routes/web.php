<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalController;
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
    $data = Profile::latest()->get();
    return view('home',compact('data'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/account-type', [App\Http\Controllers\HomeController::class, 'account_type'])->name('account_type');
Route::post('/save-account-info', [App\Http\Controllers\HomeController::class, 'save_account_info'])->name('save_account_info');
Route::get('/profiles/{id}', [App\Http\Controllers\HomeController::class, 'profiles'])->name('profiles');
Route::post('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/search/{slug}', [App\Http\Controllers\HomeController::class, 'filter_search'])->name('filter_search');
Route::post('add/images/store',[App\Http\Controllers\UserController::class, 'imagesStore'])->name('add.images.store');
Route::post('add/images/remove',[App\Http\Controllers\UserController::class, 'imagesRemove'])->name('add.images.remove');

Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::POST('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');


Route::prefix('user')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('admin_dashboard');
    Route::get('mybooking', [App\Http\Controllers\UserController::class, 'mybooking'])->name('user_mybooking');
    Route::get('booking-details', [App\Http\Controllers\UserController::class, 'booking_detail'])->name('user_booking_detail');
    Route::get('booking-info', [App\Http\Controllers\UserController::class, 'booking_info'])->name('user_booking_info');
    Route::get('booking-payment', [App\Http\Controllers\UserController::class, 'booking_payment'])->name('user_booking_payment');
    Route::POST('status-booking', [App\Http\Controllers\UserController::class, 'status_booking'])->name('status_booking');

});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_dashboard');
    Route::get('users', [App\Http\Controllers\AdminController::class, 'alluser'])->name('alluser');
    Route::get('delete-user/{id}', [App\Http\Controllers\AdminController::class, 'deluser'])->name('deluser');

});