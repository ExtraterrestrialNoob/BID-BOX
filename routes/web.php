<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Seller;
use App\Http\Controllers\Bidder;
use App\Http\Controllers\cron;
use App\Http\Controllers\payment;
use App\Http\Controllers\PaymentController;

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

// Route::get('/register_vendor',[ProductController::class, 'index'])->name('register'); // Tempory Product check

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

Route::get('/home', [HomeController::class, 'index'])->name('home','check_active');
Route::get('/seller', [Seller::class, 'index'])->middleware('role:3','check_active');
Route::get('/bidder', [Bidder::class, 'index'])->middleware('role:2','check_active');
route::get('/update',[cron::class,'expire'])->name('update');


//ProductRoutes Grouped
Route::name('product.')->group(function () {
    Route::get('product',[ProductController::class, 'index'])->name('product')->middleware('check_active',);//example
    Route::get('product/create',[ProductController::class, 'create'])->name('create')->middleware('role:1,3','check_active');//example
    Route::get('product/view/{id}',[ProductController::class, 'show'])->name('view','check_active');
    //product search and auto search
    Route::get('/product/search',[ProductController::class,'search'])->name('search');
    
    
    Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('edit')->middleware('role:1,3','product','check_active');
    Route::get('product/{id}',[ProductController::class, 'produc ts_by_user'])->name('products')->middleware('role:1,3');
    //Route::get('product/test/{id}',[ProductController::class, 'test'])->name('products'); Testing 
    //Change Products
    Route::post('product/create',[ProductController::class, 'store'])->name('product.create')->middleware('role:1,3','check_active');
    Route::post('product/bid/{pid}',[ProductController::class, 'bid'])->name('bid')->middleware('role:1,2,3');
    Route::post('product/update/{id}',[ProductController::class, 'update'])->name('update')->middleware('role:1,3','product');
    Route::post('product/update/image/{id}',[ProductController::class, 'updateimage'])->name('update.image')->middleware('role:1,3','product');
    Route::delete('product/delete/{id}',[ProductController::class, 'destroy'])->name('delete')->middleware('role:1,3','product');
    Route::post('product/filter',[ProductController::class,'product_filter'])->name('filter');

    //ajax routes
    Route::get('/product/bid/{pid}',[ProductController::class, 'getbidstatus'])->name('refresh.bid');
    // Route::delete('product/delete/',[ProductController::class, 'destroy'])->name('delete')->middleware('role:1,3');
});


//User routes
Route::name('user.')->group(function(){
    Route::get('user', [UserController::class, 'index'])->name('user'); //self Profile
    // Route::get('user/view/{id}', [UserController::class, 'show'])->name('user.view');
    Route::get('user/edit/',[UserController::class, 'edit'])->name('edit');
    //Change User Details
    Route::put('user/update/{id}',[UserController::class, 'update'])->name('user.update')->middleware('user:{id}');
    Route::delete('user/delete/{id}',[UserController::class, 'destroy'])->name('user.delete')->middleware('user:{id}');
    Route::get('user/history/{id}',[UserController::class, 'history'])->name('user.history')->middleware('user:{id}');
});

Route::name('payment.')->group(function(){

    Route::get('/payment/{wid}', [PaymentController::class,'index'])->name('payment')->middleware('payment:{wid}', 'payment_one:{wid}');
    Route::post('/payment_process/{win_id}', [PaymentController::class,'process'])->middleware('payment_one:{wid}');
    route::get('/confirm/{win_id}',[PaymentController::class,'confirm']);

});