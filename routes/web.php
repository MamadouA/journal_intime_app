<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/login', function () { // show login form
    return view('login'); 
});

Route::post('users/authenticate', [UserController::class, 'authenticate']); // authenticate user
Route::get('users/create', [UserController::class, 'create']); // show register form for users
Route::post('users/store', [UserController::class, 'store']); // register user

Route::middleware('auth')->group(function() {
    Route::get('users/logout', [UserController::class, 'logout']); // logout user
    Route::get('users/posts', [PostController::class, 'index']); // show all the posts
    Route::get('users/posts/create', [PostController::class, 'create']); // show register form for new posts
    Route::get('users/posts/destroy/{post}', [PostController::class, 'destroy']); // delete a post
    Route::get('users/posts/edit/{post}', [PostController::class, 'edit']); // show edit form for a post
    Route::post('users/posts/update/{post}', [PostController::class, 'update']); // update a post
    Route::post('users/posts', [PostController::class, 'store']); // register a new post
});






