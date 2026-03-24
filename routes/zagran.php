<?php

use App\Http\Controllers\ZagranController;
use Illuminate\Support\Facades\Route;

Route::get('/poisk-turov-on-line-v-kurske', [ZagranController::class, 'index'])->name('zagran.index');
Route::get('/poisk-turov-on-line-v-kurske/{slug}', [ZagranController::class, 'page'])->name('zagran.destination');
