<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\User\UserController;

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

Route::middleware('guest')->group( function () {
    Route::get('/', [AuthController::class, 'index'])->name('auth');
    Route::post('login',[AuthController::class, 'login'])->name('login');
});

Route::prefix('apps')->middleware('auth')->group( function() {
    Route::get('dashboard', [HomeController::class, 'index'])->name('apps.dashboard');

    Route::prefix('users')->group( function() {
        Route::get('',[UserController::class, 'index'])->name('apps.users');
        Route::get('get-data',[UserController::class, 'getData'])->name('apps.users.get-data');
        Route::get('create',[UserController::class, 'create'])->name('apps.users.create');
    });

});
