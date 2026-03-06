<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::middleware('portfolio')->group(function () {

    Route::get('/', [PortfolioController::class, 'home']);
    Route::get('/skills', [PortfolioController::class, 'skills']);
    Route::get('/projects', [PortfolioController::class, 'projects']);
    Route::get('/experience', [PortfolioController::class, 'experience']);
    Route::get('/contact', [PortfolioController::class, 'contact']);

});