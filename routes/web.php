<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('dashboard',[DashboardController::class,'getSalesFigures'])->name('dashboard');

#product crud
Route::get('product',[ProductController::class,'index'])->name('index');
Route::get('create-product',[ProductController::class,'create'])->name('create');
Route::post('store-product',[ProductController::class,'store'])->name('store');
Route::get('show-product/{id}',[ProductController::class,'show'])->name('show');
Route::get('edit-product/{id}',[ProductController::class,'edit'])->name('edit');
Route::post('update-product/{id}',[ProductController::class,'update'])->name('update');
Route::get('destroy-product/{id}',[ProductController::class,'destroy'])->name('destroy');

#sele
Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');
Route::post('/sales', [SaleController::class, 'recordSale'])->name('sales.record');
Route::get('/sales/history', [SaleController::class, 'saleHistory'])->name('sales.history');