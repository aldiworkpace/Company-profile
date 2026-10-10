<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaketTravelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;



// Route::get('/', function () {
//     return view('page.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/travel', [PaketTravelController::class, 'index'])->name('travel.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/travel/{id}', [PaketTravelController::class, 'show'])->name('travel.show');
