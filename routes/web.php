<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('myform');
});

Route::get('/posts', [PostController::class,'index'])->name('all');

Route::post('/postform', [PostController::class, 'store'])->name('postform');

Route::get('/posts/edit/{post}', [PostController::class, 'index'])->name('editform');

Route::get('/posts/editpost/{post}', [PostController::class, 'edit'])->name('editform');

//this is while using Eloquent Model as parameter in show() rather that $id variable to customize the key
Route::get('/posts/post/{post:id}', [PostController::class,'show'])->name('showpost');

Route::get('/posts/{post:id}', [PostController::class,'destroyed'])->name('deletepost');

Route::fallback(function () {
    ddd("file is not found");
});
