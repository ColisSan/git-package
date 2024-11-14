<?php

use App\Http\Controllers\PublicController;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::prefix('git-package')->group(function () {
    Route::get('g', [PublicController::class, 'index']);
});