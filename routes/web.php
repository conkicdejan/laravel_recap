<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('cars', CarController::class);

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::post('/posts', 'store')->name('posts.store');
    Route::get('/posts/{post}', 'show')->name('posts.show')->middleware('check.age');;
    Route::put('/posts/{post}', 'update')->name('posts.update');
    Route::delete('/posts/{post}', 'destroy')->name('posts.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
