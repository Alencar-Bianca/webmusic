<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
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

Route::get('/inicio', [MusicController::class, 'index'])->name('index');
Route::get('/', [MusicController::class, 'music'])->name('music');
Route::post('/upload', [MusicController::class, 'upload'])->name('upload');