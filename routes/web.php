<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; //a23,a2
use App\Http\Controllers\HomeController;

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

require __DIR__.'/auth.php'; //一番下