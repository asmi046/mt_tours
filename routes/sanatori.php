<?php

use App\Http\Controllers\SanatoriController;
use Illuminate\Support\Facades\Route;

Route::get('/otdyx-v-sanatoriyax-rossii', [SanatoriController::class, 'index'])->name('sanatori');
