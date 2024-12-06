<?php

use App\Http\Controllers\TennisCourtController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/le-centre')->name('menu.')->group(function () {

    Route::get('/', function () {
        return view('home.index');
    })->name('index');
});

Route::resource('TennisCourt',TennisCourtController::class);

