<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('index');
});

Route::post('/move', [CMainController::class, 'move']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/queryrequest', [MainController::class, 'runRaw'])->name('raw.query');

Route::get('/query', [MainController::class, 'requestQuery']);
