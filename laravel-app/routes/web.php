<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('chess');
});

Route::post('/move', [ChessController::class, 'move']);

