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
Route::get('/blockchain/nodes', [WebController::class, 'blockNodesView']);
Route::get('/blockchain/blocks', [WebController::class, 'blockBlocksView']);
Route::get('/blockchain/accounts', [WebController::class, 'blockAccountsView']);
Route::get('/blockchain/contracts', [WebController::class, 'blockContractsView']);
Route::get('/blockchain/transfers', [WebController::class, 'blockTransfersView']);
Route::get('/blockchain/transactions', [WebController::class, 'blockTransView']);
Route::get('/advertise', [WebController::class, 'advertiseView']);
Route::get('/tokens/list', [WebController::class, 'tokenListView']);
Route::get('/tokens/transfers', [WebController::class, 'tokenTransfersView']);
Route::get('/data/charts/1by10/supply', [WebController::class, 'dataSupplyView']);