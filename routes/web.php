<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/payments', function () {
        return view('payments');
    })->name('payments');

    Route::get('/developers', function () {
        return view('developers');
    })->name('developers');

    Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products');

    Route::get('/products/create', function () {
        return view('products.create');
    })->name('product.create');

    Route::post('/products/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
});
