<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

//Admin Routes:

Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/edit-profile', [AdminController::class, 'edit_profile'])->name('admin.edit_profile');
    Route::get('/create-post', [AdminController::class, 'create_post'])->name('admin.create_post');
    Route::get('/edit-post', [AdminController::class, 'edit_post'])->name('admin.edit_post');
});

