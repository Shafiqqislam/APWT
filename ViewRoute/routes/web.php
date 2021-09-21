<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class,'home'])->name('home');
Route::get('/contact/public',[PagesController::class,'contact'])->name('contact');
Route::get('/profile',[PagesController::class,'myprofile'])->name('profile');
Route::get('/service',[PagesController::class,'service'])->name('service');
Route::get('/team',[PagesController::class,'team'])->name('team');
Route::get('/about',[PagesController::class,'about'])->name('about');

