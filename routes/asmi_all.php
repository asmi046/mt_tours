<?php

use App\Http\Controllers\TourController;
use App\Http\Controllers\TourCategoryController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ReviewController;

    use App\Http\Controllers\IndexController;

    Route::get('/', [IndexController::class, "index"])->name('home');


    Route::get('/tour/{slug}', [TourController::class, "index"])->name('tour_page');
    Route::get('/tours/{slug}', [TourCategoryController::class, "index"])->name('tour_category');

    Route::get('/all_rewiews', [ReviewController::class, "index"])->name('rewiews');

    Route::get('/cache_clear', function() {
        Artisan::call('optimize:clear');
        return Redirect::back()->with('msg', 'Кеш сброшен');
    })->name('cache_clear');
