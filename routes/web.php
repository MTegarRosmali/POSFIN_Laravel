<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/berita',[HomeController::class, 'berita']);
Route::get('/services',[HomeController::class, 'services']);
Route::get('/direksi',[HomeController::class, 'direksi']);
Route::get('/core',[HomeController::class, 'core']);

// auth 
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'authenticated']);
Route::get('/logout',[AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('sliders', SliderController::class)->middleware('auth');
Route::resource('services', ServiceController::class)->middleware('auth');
Route::resource('beritas', BeritaController::class)->middleware('auth');
Route::resource('clients', ClientController::class)->middleware('auth');