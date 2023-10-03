<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
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
    return view('home');
});
Route::get('/form', [formController::class, 'index']);
Route::post('/form', [formController::class, 'store']);
Route::get('/result', [formController::class, 'result']);
Route::get('/showall', [formController::class, 'showAll']);
