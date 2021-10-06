<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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

// Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contacto', [HomeController::class, 'contact'])->name('contact');

// Auth Routes
Route::get('/formLogin', [AuthController::class, 'formLogin'])->name('auth.formLogin');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Admin Routes:
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])
    ->name('admin.index')
    ->middleware('auth');
    Route::get('/profile', [AdminController::class, 'profile'])
    ->name('admin.profile')
    ->middleware('auth');
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/create', [ArticleController::class, 'create'])
        ->name('admin.posts.create')
        ->middleware('auth');
        Route::post('/store', [ArticleController::class, 'store'])
        ->name('admin.posts.store')
        ->middleware('auth');
        Route::get('/edit/{id}', [ArticleController::class, 'edit'])
            ->name('admin.posts.edit')
            ->whereNumber('id')
            ->middleware('auth');
        Route::post('/update/{id}', [ArticleController::class, 'update'])
            ->name('admin.posts.update')
            ->whereNumber('id')
            ->middleware('auth');
        Route::delete('/destroy/{id}', [ArticleController::class, 'destroy'])
            ->name('admin.posts.destroy')
            ->whereNumber('id')
            ->middleware('auth');
    });
});
