<?php

use App\Http\Controllers\SeaController;

Route::get('/turi-na-more', [SeaController::class, 'index'])->name('sea_home');
