<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\OrderController;
use App\Http\Controllers\Front\ProductController;



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
    return view('front.home');
});

// Route::get('/product', function () {
//     return view('front.product');
// });

Route::get('/produk/{id}',[ProductController::class,'show'])->name('product.show');

Route::post('/order', [OrderController::class,'store'])->name('order');
