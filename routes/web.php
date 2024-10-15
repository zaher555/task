<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\loginController;
use App\Http\Controllers\Api\logout;
use App\Http\Controllers\Api\logoutController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth:sanctum');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::resource('/products', ProductController::class)->middleware('auth:sanctum');

Route::resource('/categories', CategoryController::class)->middleware('auth:sanctum');

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [loginController::class,'login']);
Route::get('/logout', [logoutController::class,'logout']);


