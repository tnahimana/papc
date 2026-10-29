<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/donate', [HomeController::class, 'donate']);
Route::get('/testimonial', [HomeController::class, 'testimony']);
Route::get('/team', [HomeController::class, 'team']);