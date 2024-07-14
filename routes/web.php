<?php

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\frontend\DashboardController;
use App\Http\Controllers\frontend\KelasController;
use App\Http\Controllers\frontend\KursusController;
use App\Http\Controllers\frontend\LectureController;
use App\Http\Controllers\frontend\MataPelajaranController;
use App\Http\Controllers\frontend\MateriController;
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

Route::get('/', [AuthController::class, 'getLogin'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/courses', [KursusController::class, 'index']);
    Route::get('/lecture', [LectureController::class, 'index']);
    Route::get('/kelas', [KelasController::class, 'index']);
    Route::get('/matapelajaran', [MataPelajaranController::class, 'index']);
    Route::get('/materi', [MateriController::class, 'index']);


    Route::get('/about', function () {
        return view('aboutus');
    });
});

Route::get('/login', [AuthController::class, 'getLogin']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/logout', [AuthController::class, 'getLogout']);