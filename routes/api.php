<?php

use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PenggunaanKursusController;
use App\Http\Controllers\UjianController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(KursusController::class)->group(function () {
    Route::get('kursuses', 'index');
    Route::post('kursuses/create', 'store');
    Route::post('kursuses/update/{id}', 'update');
    Route::get('kursuses/read/{id}', 'show');
    Route::get('kursuses/delete/{id}', 'destroy');

});

Route::controller(MateriController::class)->group(function () {
    Route::get('materis', 'index');
    Route::post('materis/create', 'store');
    Route::post('materis/update/{id}', 'update');
    Route::get('materis/read/{id}', 'show');
    Route::get('materis/delete/{id}', 'destroy');
});

Route::controller(PenggunaanKursusController::class)->group(function () {
    Route::get('penggunaankursuses', 'index');
    Route::post('penggunaankursuses/create', 'store');
    Route::post('penggunaankursuses/update/{id}', 'update');
    Route::get('penggunaankursuses/read/{id}', 'show');
    Route::get('penggunaankursuses/delete/{id}', 'destroy');
});

Route::controller(UjianController::class)->group(function () {
    Route::get('ujians', 'index');
    Route::post('ujians/create', 'store');
    Route::post('ujians/update/{id}', 'update');
    Route::get('ujians/read/{id}', 'show');
    Route::get('ujians/delete/{id}', 'destroy');
});