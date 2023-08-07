<?php

use App\Http\Controllers\API\HostingAPIController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-site', function () {
    return view('about');
});

Route::get('/privacy-policy', function () {
    return view('privacy');
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/check', 'index');
});


Route::post('/hosting-checker/domain', [HostingAPIController::class, 'domain_checker']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
