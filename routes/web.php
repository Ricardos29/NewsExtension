<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('/admin')->controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('post.list');
    Route::get('/posts/create', 'create')->name('post.create');
    Route::post('/posts/store/{post}', 'store')->name('post.store');
    Route::get('/posts/edit/{post}', 'edit')->name('post.edit');
    Route::post('/posts/update/{post}', 'update')->name('post.update');
    
});

Route::prefix('/admin')->controller(TagController::class)->group(function () {
    Route::get('/tags', 'index')->name('tag.list');
    Route::get('/tags/create', 'create')->name('tag.create');
    Route::post('/tags/store/{tag}', 'store')->name('tag.store');
    Route::get('/tags/edit/{tag}', 'edit')->name('tag.edit');
    Route::post('/tags/update/{tag}', 'update')->name('tag.update');
});

Route::prefix('/admin')->controller(CategoryController::class)->group(function () {
    Route::get('/categories', 'index')->name('category.list');
    Route::get('/categories/create', 'create')->name('category.create');
    Route::post('/categories/store/{category}', 'store')->name('category.store');
    Route::get('/categories/edit/{category}', 'edit')->name('category.edit');
    Route::post('/categories/update/{category}', 'update')->name('category.update');
    
});