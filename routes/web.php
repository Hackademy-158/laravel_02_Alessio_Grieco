<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// Rotte principali del sito
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chi-siamo');
Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');
Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');