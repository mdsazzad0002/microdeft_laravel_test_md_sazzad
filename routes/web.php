<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('donar', [DonerController::class, 'index']);
Route::post('donar', [DonerController::class, 'store']);
Route::post('donar/{show_by_method}', [DonerController::class, 'show_by_method']);


