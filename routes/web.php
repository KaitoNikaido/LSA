<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; //a23,a2
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CloudinaryController;
use App\Http\Controllers\CommentController;

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

Route::get('/dashboard', function () 
{
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('auth');
//a23,a4

Route::get('/articles/create', [ArticleController::class, 'create'])->middleware('auth');

Route::get('/articles/{article}', [ArticleController::class, 'show'])->middleware('auth');

Route::get('/articles', [ArticleController::class, 'index'])->middleware('auth');

Route::post('/articles',[ArticleController::class, 'store'])->middleware('auth');

Route::get('/cloudinary', [CloudinaryController::class, 'cloudinary']);  //投稿フォームの表示

Route::post('/cloudinary', [CloudinaryController::class, 'cloudinary_store']);  //画像保存処理

Route::post('/comments/{article}', [CommentController::class, 'store']); //コメントの表示

require __DIR__.'/auth.php'; //一番下