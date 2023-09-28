<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//auth
Route::get('/login',[AdminAuthController::class, 'login'])->middleware('adminLoggedIn');
Route::post('/check',[AdminAuthController::class, 'check'])->name('admin.check');
Route::get('/logout',[AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/create/successfully', [CategoryController::class, 'store'])->name('categories.store');