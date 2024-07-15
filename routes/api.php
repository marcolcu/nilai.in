<?php

use App\Http\Controllers\backend\JawabanController;
use App\Http\Controllers\backend\KelasController;
use App\Http\Controllers\backend\KelasDetailController;
use App\Http\Controllers\backend\MataPelajaranController;
use App\Http\Controllers\backend\MateriController;
use App\Http\Controllers\backend\ProgressUjianController;
use App\Http\Controllers\backend\SoalController;
use App\Http\Controllers\backend\UjianController;
use App\Http\Controllers\backend\UserController;
use App\Models\KelasDetail;
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

Route::controller(UserController::class)->group(function () {
    Route::get('users', 'index');
    Route::post('users/update/{id}', 'update');
    Route::get('users/read/{id}', 'show');
    Route::get('users/delete/{id}', 'destroy');
});

Route::controller(JawabanController::class)->group(function () {
    Route::get('jawabans', 'index');
    Route::post('jawabans/create', 'store');
    Route::post('jawabans/update/{id}', 'update');
    Route::get('jawabans/read/{id}', 'show');
    Route::get('jawabans/delete/{id}', 'destroy');
});

Route::controller(KelasController::class)->group(function () {
    Route::get('kelases', 'index');
    Route::post('kelases/create', 'store');
    Route::post('kelases/update/{id}', 'update');
    Route::get('kelases/read/{id}', 'show');
    Route::get('kelases/delete/{id}', 'destroy');
});

Route::controller(MataPelajaranController::class)->group(function () {
    Route::get('matapelajarans', 'index');
    Route::get('mapelKelas', 'materiSyncKelas');
    Route::post('matapelajarans/create', 'store');
    Route::post('matapelajarans/update/{id}', 'update');
    Route::get('matapelajarans/read/{id}', 'show');
    Route::get('matapelajarans/delete/{id}', 'destroy');
});

Route::controller(MateriController::class)->group(function () {
    Route::get('materis', 'index');
    Route::get('materiMapel', 'materiSyncMataPelajaran');
    Route::post('materis/create', 'store');
    Route::post('materis/update/{id}', 'update');
    Route::get('materis/read/{id}', 'show');
    Route::get('materis/delete/{id}', 'destroy');
});

Route::controller(ProgressUjianController::class)->group(function () {
    Route::get('progressujians', 'index');
    Route::post('progressujians/create', 'store');
    Route::post('progressujians/update/{id}', 'update');
    Route::get('progressujians/read/{id}', 'show');
    Route::get('progressujians/delete/{id}', 'destroy');
});

Route::controller(SoalController::class)->group(function () {
    Route::get('soals', 'index');
    Route::post('soals/create', 'store');
    Route::post('soals/update/{id}', 'update');
    Route::get('soals/read/{id}', 'show');
    Route::get('soals/delete/{id}', 'destroy');
});

Route::controller(UjianController::class)->group(function () {
    Route::get('ujians', 'index');
    Route::get('ujianMapel', 'ujianSyncMataPelajaran');
    Route::post('ujians/create', 'store');
    Route::post('ujians/update/{id}', 'update');
    Route::get('ujians/read/{id}', 'show');
    Route::get('ujians/delete/{id}', 'destroy');
});

Route::controller(KelasDetailController::class)->group(function () {
    Route::get('kelasdetails', 'index');
    Route::post('kelasdetails/create', 'store');
    Route::post('kelasdetails/update/{id}', 'update');
    Route::get('kelasdetails/read/{id}', 'show');
    Route::get('kelasdetails/delete/{id}', 'destroy');
});

// Route::controller(TemplateController::class)->group(function () {
//     Route::get('templates', 'index');
//     Route::post('templates/create', 'store');
//     Route::post('templates/update/{id}', 'update');
//     Route::get('templates/read/{id}', 'show');
//     Route::get('templates/delete/{id}', 'destroy');
// });