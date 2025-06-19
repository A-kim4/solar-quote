<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/devis/nouveau', [QuoteController::class, 'create'])->name('quotes.create');

Route::post('/devis', [QuoteController::class, 'store'])->name('quotes.store');

Route::get('/devis/{quote}', [QuoteController::class, 'show'])->name('quotes.show');

Route::get('/devis/{quote}/pdf', [QuoteController::class, 'pdf'])->name('quotes.pdf');

Route::get('/devis', [QuoteController::class, 'index'])->name('quotes.index');

Route::delete('/devis/{quote}', [QuoteController::class, 'destroy'])->name('quotes.destroy');
