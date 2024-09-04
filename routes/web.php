<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('producto.index');
Route::get('/product-create',  [ProductController::class, 'create'])->name('producto.create');
Route::post('/product', [ProductController::class, 'store'])->name('producto.store');
Route::get('/product-show/{product}',  [ProductController::class, 'show'])->name('producto.show');

Route::get('/products-report', [ProductController::class, 'getReport'])->name('producto.report');
