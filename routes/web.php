<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
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

//Home Routes

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contacto', [HomeController::class, 'contact'])->name('contact');
Route::get('/login', [HomeController::class, 'login'])->name('login');

//Admin Routes:

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::group(['prefix' => 'posts'], function() {
        Route::get('/create', [ArticleController::class, 'create'])->name('admin.posts.create');
        Route::post('/store', [ArticleController::class, 'store'])->name('admin.posts.store');
        Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('admin.posts.edit');
        Route::post('/update/{id}', [ArticleController::class, 'update'])->name('admin.posts.update');
        Route::delete('/destroy/{id}', [ArticleController::class, 'destroy'])->name('admin.posts.destroy');
    });
});

