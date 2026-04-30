<?php

use App\Http\Controllers\SeaController;
use Illuminate\Support\Facades\Route;

Route::get('/tury-na-more', [SeaController::class, 'index'])->name('sea_home');
Route::get('/tury-na-more/grafik-zaezdov', [SeaController::class, 'grafik_zaezdov'])->name('grafik_zaezdov');
Route::get('/tury-na-more/nashi-avtobusi', [SeaController::class, 'nashi_avtobusi'])->name('nashi_avtobusi');
Route::get('/tury-na-more/kupit-proezd', [SeaController::class, 'kupit_proezd'])->name('kupit_proezd');
Route::get('/tury-na-more/kupit-proezd/{slug}', [SeaController::class, 'kupit_proezd_resort'])->name('kupit_proezd_resort');
Route::get('/tury-na-more/region/{direction}', [SeaController::class, 'direction'])->name('sea_direction');
Route::get('/tury-na-more/{resort}', [SeaController::class, 'resort'])->name('sea_resort');
Route::get('/tury-na-more/{resort}/{hotel}', [SeaController::class, 'hotel'])->name('sea_hotel');

Route::get('/get_tour_list', [SeaController::class, 'getTourList'])->name('sea_get_tour_list');
Route::get('/get_tour_price', [SeaController::class, 'getTourPrice'])->name('sea_get_tour_price');
