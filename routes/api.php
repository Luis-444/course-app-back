<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Route};
use App\Http\Controllers\AuthController;
use App\Http\Controllers\{CategoryController, CourseController};

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
Route::post('/register',[AuthController::class, 'register'])->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('courses', CourseController::class);
});
