<?php

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
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', [\App\Http\Controllers\MediaController::class, 'index'])
    ->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/media/create', [\App\Http\Controllers\MediaController::class, 'create'])
    ->name('media.create');

Route::middleware(['auth:sanctum', 'verified'])
    ->post('/media/store', [\App\Http\Controllers\MediaController::class, 'store'])
    ->name('media.store');

Route::get('/help', function(){
    return App\Models\Media::all();
});
