<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
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
    $scriptPath = base_path('../deploy.sh');
    $output = shell_exec('whoami');

    echo "<pre>" . htmlspecialchars($output);

    if (empty($output)) {
        echo "<h1>This is empty po~!</h1>";
    }
});


// sp viewer
Route::get('/home', [HomeController::class, 'index']);