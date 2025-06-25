<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('index');
});

Route::post('/move', [CMainController::class, 'move']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/register', [RegisterController::class, 'register'])->name('register');

// query routes
Route::post('/query-result', [MainController::class, 'runRaw'])->name('raw.query');
Route::get('/query', [MainController::class, 'requestQuery']);

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
});

// portfolio

Route::get('/portfolio', function () {
    return view('portfolio');
});

// deployer
Route::get('/vmdeployer', function () {
    echo "This is a deployer :)";
    $output = shell_exec('/bin/bash /var/www/deploy.sh 2>&1');
    echo "<pre>" . htmlspecialchars($output);
});

// sp viewer
Route::get('/home', [HomeController::class, 'index']);


// 
Route:middleware(['admin'])->group(function(){
    
});
