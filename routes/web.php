<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CastsController,};

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CastsController::class)->group(function () {
    Route::get('/cast', 'index')->name('cast.index');
    Route::get('/cast/create', 'create')->name('cast.create');
    Route::post('/cast', 'store')->name('cast.store');
    Route::get('/cast/{cast}/edit', 'edit')->name('cast.edit');
    Route::get('/cast/{cast}', 'show')->name('cast.show');
    Route::put('/cast/{cast}', 'update')->name('cast.update');
    Route::delete('/cast/{cast}', 'delete')->name('cast.delete');
});

Route::resource('cast', CastsController::class);



