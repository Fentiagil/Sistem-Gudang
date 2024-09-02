<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\MutasiController;

Route::post('login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // User routes
    Route::get('users', [UserController::class, 'index']);
    Route::post('users', [UserController::class, 'store']);
    Route::get('users/{user}', [UserController::class, 'show']);
    Route::put('users/{user}', [UserController::class, 'update']);
    Route::delete('users/{user}', [UserController::class, 'destroy']);
    Route::get('users/{user}/history', [UserController::class, 'history']);

    // Barang routes
    Route::get('barangs', [BarangController::class, 'index']);
    Route::post('barangs', [BarangController::class, 'store']);
    Route::get('barangs/{barang}', [BarangController::class, 'show']);
    Route::put('barangs/{barang}', [BarangController::class, 'update']);
    Route::delete('barangs/{barang}', [BarangController::class, 'destroy']);
    Route::get('barangs/{barang}/history', [BarangController::class, 'history']);

    // Mutasi routes
    Route::get('mutasis', [MutasiController::class, 'index']);
    Route::post('mutasis', [MutasiController::class, 'store']);
    Route::get('mutasis/{mutasi}', [MutasiController::class, 'show']);
    Route::put('mutasis/{mutasi}', [MutasiController::class, 'update']);
    Route::delete('mutasis/{mutasi}', [MutasiController::class, 'destroy']);

    // Rute untuk history mutasi
    Route::get('barangs/{barang}/history', [MutasiController::class, 'historyForBarang']);
    Route::get('users/{user}/history', [MutasiController::class, 'historyForUser']);
    
});
