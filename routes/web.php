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
    ->get('/media/display/{id}', function($id){
            return view('media.display')->with('id', $id);
        })->name('media.display');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/release/display/{id}', function($id){
        return view('physical_release.display')->with('id', $id);
    })->name('physical_release.display');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/release/create/{mediaID?}', function($mediaID = null){
        return view('physical_release.create')->with('mediaID', $mediaID);
    })->name('physical_release.create');

Route::get('/help', function(){
    return App\Models\Media::all();
});
