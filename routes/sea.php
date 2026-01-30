<?php

use App\Http\Controllers\SeaController;

Route::get('/turi-na-more', [SeaController::class, 'index'])->name('sea_home');
Route::get('/turi-na-more/{resort}', [SeaController::class, 'resort'])->name('sea_resort');
Route::get('/turi-na-more/{resort}/{hotel}', [SeaController::class, 'hotel'])->name('sea_hotel');
