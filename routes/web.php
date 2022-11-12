<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; //a23,a2

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [ArticleController::class, 'index'])->name('index')->middleware('auth');
//a23,a4

require __DIR__.'/auth.php'; //一番下