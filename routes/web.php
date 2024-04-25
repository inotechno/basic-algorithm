<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalController;

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

Route::get('/soal-a', [SoalController::class,'soalA'])->name('soal.a');
Route::get('/soal-b', [SoalController::class,'soalB'])->name('soal.b');
Route::get('/soal-c', [SoalController::class,'soalC'])->name('soal.c');
