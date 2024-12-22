<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\DetailController;
use Illuminate\View\View;
use App\Http\Controllers\HomeController;
use Egulias\EmailValidator\Result\Reason\DetailedReason;

Route::get('/', [HomeController::class, 'index'])
        ->name('home');;
Route::get('/detail', [DetailController::class, 'index'])
        ->name('detail');;


Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);


Route::prefix('admin')
    ->namespace('admin')
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
    });
