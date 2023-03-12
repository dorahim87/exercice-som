<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TpController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('about', [TpController::class, 'index']);
Route::get('/', [TpController::class, 'index']);
Route::get('services', [TpController::class, 'services']);
Route::get('portfolio', [TpController::class, 'portfolio']);
Route::get('contact', [TpController::class, 'contact']);
Route::post('contact', [TpController::class, 'formContact']);