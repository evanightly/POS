<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyAndHealthController;
use App\Http\Controllers\FoodAndBeverageController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::prefix('category')->group(function () {
    Route::get('food-beverage', [FoodAndBeverageController::class, 'index']);
    Route::get('beauty-health', [BeautyAndHealthController::class, 'index']);
    Route::get('home-care', [HomeCareController::class, 'index']);
    Route::get('baby-kid', [BabyKidController::class, 'index']);
});

Route::get('user/{id}/name/{name}', [UserController::class, 'show']);

Route::get('transaction/{id}', [TransactionController::class, 'show']);
