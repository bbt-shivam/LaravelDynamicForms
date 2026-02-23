<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function(){
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
    Route::get('register',[RegistrationController::class, 'index'])->name('register');
    Route::post('register', [RegistrationController::class, 'store']);
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout',[LoginController::class, 'logout'])->name('logout');

    Route::resource('forms', FormController::class);

    Route::get('settings')->name('settings');
});