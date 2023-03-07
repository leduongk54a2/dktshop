<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\Auth\LogoutController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\CheckoutController;
//Route::get('/', function (){
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index']);



Route::controller(ProductController::class)->group(function (){
   Route::get('/category/{id?}','showWithCate') ;
   Route::get('/product/{id?}','find');
   Route::get('search/{date}','findWithSearch');
});
Route::get('/logout',[LogoutController::class,'logout']);

Route::controller(CartController::class)->group(function (){
   Route::post('/cart/add/{id?}','add');
    Route::get('/cart','index');
    Route::post('cart/update','update');
    Route::get('cart/destroy','destroy');
    Route::get('cart/delete/{id?}','delete');
});

Route::controller(CheckoutController::class)->group(function (){
   Route::get('/checkout','index');
   Route::post('/checkout/pay','pay');
});


Route::controller(LoginController::class)->group(function (){
    Route::get('/login','login');
    Route::post('/login','check');
});
Route::controller(RegisterController::class)->group(function(){
   Route::get('/register','index');
   Route::post('/register','register');
});



Route::get('/news',[\App\Http\Controllers\NewsController::class,'index']);
