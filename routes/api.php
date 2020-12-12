<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/test', function (Request $request) {
    return 'Connected';
});

Route::middleware('auth:sanctum')->group(function() {
    Route::prefix('product')->group(function() {
        // Product related routes
        Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);
        Route::get('/{product:api_id}', [\App\Http\Controllers\ProductController::class, 'show']);
        Route::post('/', [\App\Http\Controllers\ProductController::class, 'store']);

        // Product Price related routes
        Route::post('/price', [\App\Http\Controllers\PriceController::class, 'store']);
    });

});

