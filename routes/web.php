<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'indexView']);
Route::get('/privacy-policy', [WebController::class, 'privacyPolicyView']);
Route::get('/terms-conditions', [WebController::class, 'termsConditionsView']);
