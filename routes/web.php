<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoanController;
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
    return view('welcome');
});
Route::get('category/index',[CategoryController::class,'index'])->name('Category.index');
Route::get('category/create',[CategoryController::class,'create'])->name('Category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('Category.store');

Route::get('brand/index',[BrandController::class,'index'])->name('brand.index');
Route::get('brand/create',[BrandController::class,'create'])->name('Brand.create');
Route::post('brand/store',[BrandController::class,'store'])->name('Brand.store');
Route::get('{id}/brand/edit',[BrandController::class,'edit'])->name('Brand.edit');

Route::get('product/index',[ProductController::class,'index'])->name('product.index');
Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product/store',[ProductController::class,'store'])->name('Product.store');

Route::get('client/index',[ClientController::class, 'index'])->name('client.index');
Route::get('client/create',[ClientController::class, 'create'])->name('client.create');
Route::post('client/store',[ClientController::class, 'store'])->name('client.store');

Route::get('transaction/index',[TransactionController::class, 'index'])->name('transaction.index');
Route::get('transaction/create',[TransactionController::class, 'create'])->name('transaction.create');
Route::post('transaction/store',[TransactionController::class, 'store'])->name('transaction.store');

Route::get('loan/index',[LoanController::class, 'index'])->name('loan.index');
Route::get('loan/create',[LoanController::class, 'create'])->name('loan.create');
Route::post('loan/store',[LoanController::class, 'store'])->name('loan.store');