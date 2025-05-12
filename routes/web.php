<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/lkpd', function () {
    return view('lkpd');
})->name('lkpd');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');

// Halaman Admin
Route::prefix('admin')->middleware('auth')->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

});