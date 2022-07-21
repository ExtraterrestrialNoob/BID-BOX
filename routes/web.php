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
    Route::get('product',[ProductController::class, 'index'])->name('product');
    Route::get('product/create',[ProductController::class, 'create'])->name('product.create')->middleware('role:3');;
    Route::get('product/view/{id}',[ProductController::class, 'show'])->name('product.view');
    Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit')->middleware('role:3');;
    Route::post('product',[ProductController::class, 'store'])->name('product.product');
    Route::put('product/update/{id}',[ProductController::class, 'update'])->name('product.update')->middleware('role:3');;
    Route::delete('product/delete/{id}',[ProductController::class, 'destroy'])->name('product.delete')->middleware('role:3');;
});


//User routes
Route::name('user.')->group(function(){
    Route::get('user', [UserController::class, 'index'])->name('user'); //self Profile
    Route::get('user/view/{id}', [UserController::class, 'show'])->name('user.view');;
    Route::get('user/edit/{id}',[UserController::class, 'edit'])->name('user.edit');;
    //Change User Details
    Route::put('user/update/{id}',[UserController::class, 'update'])->name('user.update');;
    Route::delete('user/delete/{id}',[UserController::class, 'destroy'])->name('user.delete');;
});