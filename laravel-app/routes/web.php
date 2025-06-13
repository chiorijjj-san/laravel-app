<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/move', [CMainController::class, 'move']);
Route::post('/login', [CLoginController::class, 'index']);
