<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'user'])->group(function () {
   Route::get('/index', [UserController::class, 'index'])->name('index');
   Route::get('/readmore/{blog}', [UserController::class, 'readmore'])->name('readmore');
});

Route::middleware(['auth', 'admin'])->group(function () {
   Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
   Route::resource('/category', CategoryController::class);
   Route::resource('/blog', BlogController::class);
});
