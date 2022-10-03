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
    return view('create');
});

// Route::get('/', "StgController@index");
// Route::get('/edit/{id}', "StgController@edit");
// Route::get('/show/{id}', "StgController@show");
// Route::get('/create', "StgController@create");
// Route::post('/store', "StgController@store");
// Route::post('/update/{id}', "StgController@update");


Route::get('/create', [App\Http\Controllers\StgController::class, 'create'])->name('create');
Route::post('/create', [App\Http\Controllers\StgController::class, 'store'])->name('store');
Route::get('/edit', [App\Http\Controllers\StgController::class, 'edit'])->name('edit');
Route::post('/edit/', [App\Http\Controllers\StgController::class, 'update'])->name('update');
Route::delete('/delete', [App\Http\Controllers\StgController::class, 'destroy'])->name('destroy');
Route::get('/edit', [App\Http\Controllers\StgController::class, 'edit'])->name('edit');
Route::post('/edit/', [App\Http\Controllers\StgController::class, 'update'])->name('update');
