<?php

use App\Http\Controllers\Public\PublicController;
use Illuminate\Support\Facades\Route;

Route::prefix('git-package')->group(function () {
    Route::get('g', [PublicController::class, 'index']);
    Route::get('test', [PublicController::class, 'test']);
});