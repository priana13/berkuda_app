<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\PostController;
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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/produk/{id}',[ProductController::class,'show'])->name('product.show');

Route::post('/order', [OrderController::class,'store'])->name('order');

Route::get('/page/{post:slug}',[PageController::class,'show'])->name('page.show');
Route::get('/{post:slug}',[PostController::class,'show'])->name('post.show');
