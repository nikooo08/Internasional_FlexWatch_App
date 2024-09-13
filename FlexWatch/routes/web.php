<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/login/logut', [LoginController::class, 'showLoginForm'])->name('logout');

