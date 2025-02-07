<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'indexView']);
Route::get('/privacy-policy', [WebController::class, 'privacyPolicyView']);
Route::get('/terms-conditions', [WebController::class, 'termsConditionsView']);
Route::get('/about-us', [WebController::class, 'aboutView']);
Route::get('/api', [WebController::class, 'apiView']);
Route::get('/etf', [WebController::class, 'etfView']);
Route::get('/architecture', [WebController::class, 'architectureView']);