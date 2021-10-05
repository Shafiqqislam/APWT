<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class,'home'])->name('home');
//Products
Route::get('/product', [ProductController::class,'product'])->name('product');
Route::post('/product', [ProductController::class,'productSubmit'])->name('product');
Route::get('/product/list',[ProductController::class,'list'])->name('list');
Route::get('/product/edit/{id}/{p_name}',[ProductController::class,'edit']);
Route::post('/product/edit',[ProductController::class,'editSubmit'])->name('edit');
Route::get('/product/delete/{id}/{p_name}',[ProductController::class,'delete']);

