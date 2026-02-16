<?php

use App\Http\Controllers\SeaController;

Route::get('/tury-na-more', [SeaController::class, 'index'])->name('sea_home');
Route::get('/tury-na-more/{resort}', [SeaController::class, 'resort'])->name('sea_resort');
Route::get('/tury-na-more/{resort}/{hotel}', [SeaController::class, 'hotel'])->name('sea_hotel');

Route::get('/get_tour_list', [SeaController::class, 'getTourList'])->name('sea_get_tour_list');
