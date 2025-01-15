<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');

    Route::get('/password/reset-request', [ForgotPasswordController::class, 'create'])->name('password-reset-request');
    Route::get('/password/reset', [ResetPasswordController::class, 'create']);


});


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});


