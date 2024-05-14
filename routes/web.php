<?php

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

Route::get('/', [\App\Http\Controllers\Frontend\HomepageController::class, 'index'])->name('home');
Route::get('/services', [\App\Http\Controllers\Frontend\ServiceController::class, 'index'])->name('services');
Route::get('/cars', [\App\Http\Controllers\Frontend\CarController::class, 'index'])->name('cars');
Route::get('/cars/{car:slug}', [\App\Http\Controllers\Frontend\CarController::class, 'show'])->name('car.show');
Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');
