<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/szerviz/muhely', [PagesController::class, 'muhely'])->name('szerviz.muhely');
Route::get('/szerviz/szakszerviz', [PagesController::class, 'szakszerviz'])->name('szerviz.szakszerviz');
Route::get('/szerviz/hanggenerator', [PagesController::class, 'hanggenerator'])->name('szerviz.hanggenerator');
Route::get('/szerviz/referenciáink', [PagesController::class, 'workshop_reference'])->name('workshop_reference');
Route::get('/autokozmetika/referencia', [PagesController::class, 'carcosmetics_reference'])->name('carcosmetics_reference');
// Route::get('/autokozmetika', [PagesController::class, 'autokozmetika'])->name('autokozmetika');
Route::get('/alkatresz', [PagesController::class, 'carpart'])->name('carpart');
Route::get('/arajanlat', [PagesController::class, 'price_offer'])->name('price_offer');
Route::get('/kapcsolat', [PagesController::class, 'contact'])->name('contact');
