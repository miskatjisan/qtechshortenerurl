<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\ShortenerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('', [UserAuthController::class, 'login'])->name('login');
Route::post('post-login', [UserAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [UserAuthController::class, 'registration'])->name('register');
Route::post('post-registration', [UserAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('/shorten', [UserAuthController::class, 'index'])->name('home'); 
Route::get('logout', [UserAuthController::class, 'logout'])->name('logout');



Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');


Route::post('/shorten/post/successfully', [ShortenerController::class, 'shorten'])->name('url.shorten');
Route::get('/{shortUrl}', [ShortenerController::class, 'redirect']);  