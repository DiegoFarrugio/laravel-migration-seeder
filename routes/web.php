<?php

use Illuminate\Support\Facades\Route;

//Controllers

use App\Http\Controllers\Guest\PageController;

Route::get('/trains', [PageController::class, 'index'])->name('train.index');

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
