<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/users', Controllers\UserApiController::class);
Route::resource('/catalogs', Controllers\CatalogController::class);
Route::resource('/products', Controllers\ProductController::class);
Route::post('/products/{product}/add_catalog', [Controllers\ProductController::class, 'addCatalog']);
Route::delete('/products/{product}/detach_catalog', [Controllers\ProductController::class, 'detachCatalog']);
