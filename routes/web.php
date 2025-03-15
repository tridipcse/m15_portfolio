<?php

use App\Http\Controllers\PrimaryController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PrimaryController::class, 'homePage'])->name('home');
Route::get('/about', [PrimaryController::class, 'aboutPage'])->name('about');
Route::get('/services', [PrimaryController::class, 'servicesPage'])->name('services');
Route::get('/portfolio', [PrimaryController::class, 'portfolioPage'])->name('portfolio');
Route::get('/contact', [PrimaryController::class, 'contactPage'])->name('contact');

