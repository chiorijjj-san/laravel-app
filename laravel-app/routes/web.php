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
Route::get('/vmdeployer', function (Request $request) {
    // if ($request->header('X-DEPLOY-TOKEN') !== env('DEPLOY_TOKEN')) {
    //     abort(403, 'Unauthorized.');
    // }
    $output = '';
    try{
        $output = shell_exec('sh ' . base_path('deploy.sh'));
    }catch(Exception $e){
        print_r($e);
    }

    echo "<pre>";
    print_r($output);

    if(empty($output)){
        echo "<h1>This is empty po~!</h1>";
    }
});

// sp viewer
Route::get('/home', [HomeController::class, 'index']);