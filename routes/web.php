<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaketTravelController;

// Route::get('/', function () {
//     return view('page.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/travel', [PaketTravelController::class, 'index'])->name('travel.index');
