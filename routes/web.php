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

Route::get('/register_vendor',function(){
    return view('auth/register_vendor');
})->name('register');

Route::get('/register_success',function(){
    return view('auth/registration_success_confirm');
})->name('/register_success');

// Route::get('/buyer_login',function(){
//     return view('/auth/register');
// })->name('register_buyer');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/seller', [App\Http\Controllers\Seller::class, 'index'])->middleware('role:3');
Route::get('/bidder', [App\Http\Controllers\Bidder::class, 'index'])->middleware('role:2');