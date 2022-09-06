<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Seller;
use App\Http\Controllers\Bidder;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register_vendor',[ProductController::class, 'index'])->name('register'); // Tempory Product check

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/seller', [Seller::class, 'index'])->middleware('role:3');
Route::get('/bidder', [Bidder::class, 'index'])->middleware('role:2');



//ProductRoutes Grouped
Route::name('product.')->group(function () {
    Route::get('product',[ProductController::class, 'index'])->name('product');
    Route::get('product/create',[ProductController::class, 'create'])->name('product.create')->middleware('role:1,3');
    Route::get('product/view/{id}',[ProductController::class, 'show'])->name('view');
    //ajax
    Route::get('/getreq/{id}',[ProductController::class, 'bidupdate']);
    Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit')->middleware('role:1,3');
    Route::get('product/{id}',[ProductController::class, 'products_by_user'])->name('products');
    //Change Products
    Route::post('product/create',[ProductController::class, 'store'])->name('product.create')->middleware('role:1,3');
    Route::post('product/bid/{pid}',[ProductController::class, 'bid'])->name('bid')->middleware('role:1,2,3');
    Route::put('product/update/{id}',[ProductController::class, 'update'])->name('product.update')->middleware('role:1,3');
    Route::delete('product/delete/{id}',[ProductController::class, 'destroy'])->name('product.delete')->middleware('role:1,3');
});


//User routes
Route::name('user.')->group(function(){
    Route::get('user', [UserController::class, 'index'])->name('user'); //self Profile
    Route::get('user/view/{id}', [UserController::class, 'show'])->name('user.view');
    Route::get('user/edit/',[UserController::class, 'edit'])->name('edit');
    //Change User Details
    Route::put('user/update/{id}',[UserController::class, 'update'])->name('user.update');
    Route::delete('user/delete/{id}',[UserController::class, 'destroy'])->name('user.delete');
});