<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'getHome'])->name('home');

Route::get('/home/dettaglio/{name}', [PublicController::class, 'getProdottiDettagli'])->name('home.dettagli');

Route::get('/prodotti', [PublicController::class, 'getProdotti'])->name('prodotti');

Route::get('/prodotti/dettaglio/{name}', [PublicController::class, 'getProdottiDettagli'])->name('prodotti.dettagli');

Route::get('/chi-siamo', [PublicController::class, 'getChiSiamo'])->name('chi-siamo');

Route::get('/contattaci', [PublicController::class, 'getContattaci'])->name('contattaci');

Route::post('/contattaci/letterina', [PublicController::class, 'postMail'])->name('contattaci.letterina');

Route::get('/prodotti/dettaglio/conttataci/{name}', [PublicController::class, 'getDettagliToLettera'])->name('dettagli.email');