<?php

use App\Http\Controllers\API\HostingAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Routes for hosting-checker
Route::prefix('hosting-checker')->group(function () {
    Route::get('/', [HostingAPIController::class, 'index']);
    // Route::post('/domain', [HostingAPIController::class, 'domain_checker']);
});
