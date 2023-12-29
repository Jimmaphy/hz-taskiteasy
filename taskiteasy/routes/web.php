<?php

use App\Http\Controllers\TaskController;
use \App\Http\Controllers\PostController;
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

Route::view('/', 'welcome')->name('index');
Route::view('/about', 'about')->name('about');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
