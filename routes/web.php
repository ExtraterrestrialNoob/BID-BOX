<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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



//ProductRoutes Grouped
Route::name('product.')->group(function () {
    Route::get('product',[ProductController::class, 'index']);
    Route::get('product/create',[ProductController::class, 'create']);
    Route::get('product/{id}',[ProductController::class, 'show']);
    Route::get('product/edit/{id}',[ProductController::class, 'edit']);
    Route::post('product',[ProductController::class, 'store']);
    Route::put('product/update/{id}',[ProductController::class, 'update']);
    Route::delete('product/delete/{id}',[ProductController::class, 'destroy']);
});


//User routes
Route::name('user.')->group(function(){
    Route::get('/user', [UserController::class, 'index']); //self Profile
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::get('user/edit/{id}',[UserController::class, 'edit']);
    //Change User Details
    Route::put('user/update/{id}',[UserController::class, 'update']);
    Route::delete('user/delete/{id}',[UserController::class, 'destroy']);
});