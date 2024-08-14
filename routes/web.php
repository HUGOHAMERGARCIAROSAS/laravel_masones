<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Administracion\DashboardController;

use App\Http\Middleware\RedirectIfAuthenticated;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');


Route::get('register',[RegisterController::class,'showRegistrationForm'])->name('register')->middleware(RedirectIfAuthenticated::class);
Route::post('register',[RegisterController::class,'register'])->middleware(RedirectIfAuthenticated::class);

Route::get('login',[LoginController::class,'showLoginForm'])->name('login')->middleware(RedirectIfAuthenticated::class);
Route::post('login',[LoginController::class,'login'])->middleware(RedirectIfAuthenticated::class);


Route::post('logout',[LoginController::class,'logout'])->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
