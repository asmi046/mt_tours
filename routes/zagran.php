<?php

use App\Http\Controllers\ZagranController;
use Illuminate\Support\Facades\Route;

Route::get('/poisk-turov-on-line-v-kurske', [ZagranController::class, 'index'])->name('zagran.index');
Route::get('/poisk-turov-on-line-v-kurske/{slug}', [ZagranController::class, 'page'])->name('zagran.destination');
Route::get('/poisk-turov-on-line-v-kurske/{slug}/hot-tours', [ZagranController::class, 'hot'])->name('zagran.hot');
Route::get('/poisk-turov-on-line-v-kurske/{state}/{resort}', [ZagranController::class, 'resort'])->name('zagran.resort');
