<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\pharmacistController;
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
    return redirect()->route('login');
});
Route::get('/dashboard',[LoginController::class,'dashboard'])->name('dashboard');
//Login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
/*medicine routes*/ 
Route::get('/medicines/list',[MedicineController::class,'list'])->name('medicines.list');
Route::get('/addtocart/{id}',[MedicineController::class,'addtocart'])->name('medicines.addtocart');
Route::get('/emptycart',[MedicineController::class,'emptycart'])->name('medicines.emptycart');
Route::get('/cart',[MedicineController::class,'mycart'])->name('medicines.mycart');
Route::post('/checkout',[MedicineController::class,'checkout'])->middleware('ValidCustomer')->name('checkout');

/*medicine routes end*/ 
Route::get('/customer/myorders',[CustomerController::class,'myorders'])->middleware('ValidCustomer')->name('customer.myorders');
Route::get('/customer/myorders/details/{id}',[CustomerController::class,'orderdetails'])->middleware('ValidCustomer')->name('customer.myorders.details');

Route::get('/medicine',[MedicineController::class,'medicine'])->name('medicine');
Route::post('/medicine', [MedicineController::class,'medicineSubmit'])->name('medicine');
Route::get('/medicine/medicinelist',[MedicineController::class,'medicinelist'])->name('medicinelist');
Route::get('/medicine/edit/{id}/{name}',[MedicineController::class,'edit']);
Route::post('/medicine/edit',[MedicineController::class,'editSubmit'])->name('edit');
Route::get('/medicine/delete/{id}/{name}',[MedicineController::class,'delete']);

