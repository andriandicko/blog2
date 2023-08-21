<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login/post', [AuthController::class, 'signIn'])->name('login.post');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register/post', [AuthController::class, 'signUp'])->name('register.post');
});

Route::get('/logout', [AuthController::class, 'signOut'])->name('signOut');



Route::group(['middleware' => ['auth']], function() {
    Route::get('/', function () {

        $data = [
            "title" => "Dashboard",
            "user" => [
                // "name" => "<h5>".Auth::user()->name."</h5>",
                "name" => Auth::user()->name,
                "email" => Auth::user()->email,
            ]
            ];
        return view('contents.dashboard', $data);
    });
    
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/users/create', [UserController::class, 'create']);
        Route::get('/users', [UserController::class, 'index']);
        Route::post('/users', [UserController::class, 'store']);
        Route::get('/users/{id}/show', [UserController::class, 'show']);
        Route::get('/users/{id}/edit', [UserController::class, 'edit']);
        Route::put('/users/{id}', [UserController::class, 'update']);
        Route::get('/users/{id}/delete', [UserController::class, 'delete']);
    });

    
    Route::resource('/categories', CategoryController::class);
    
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


