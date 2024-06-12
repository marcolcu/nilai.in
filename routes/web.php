<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\DashboardController;
use App\Http\Controllers\frontend\KursusController;
use App\Http\Controllers\HomeController;
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
    return view('login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/courses', [KursusController::class, 'index']);

    Route::get('/about', function () {
        return view('aboutus');
    });

    // Component
    Route::get('/table-kursus', [KursusController::class, 'component']);
});

Route::get('/login', [AuthController::class, 'getLogin']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/logout', [AuthController::class, 'getLogout']);