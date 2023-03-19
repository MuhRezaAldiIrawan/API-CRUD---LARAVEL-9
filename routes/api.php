<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BarangController;

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

// Route API For Login & Register
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Route API For Barang
Route::get('getalldata', [BarangController::class, 'index']);
Route::get('onedata/{id}', [BarangController::class, 'onedata']);
Route::post('addbarang', [BarangController::class, 'addbarang']);
Route::post('updatebarang/{id}', [BarangController::class, 'updatebarang']);
Route::post('deletebarang/{id}', [BarangController::class, 'deletebarang']);
