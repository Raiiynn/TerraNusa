<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);


Route::prefix('admin')
    ->namespace('admin')
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
    });
