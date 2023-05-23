<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::prefix('admin/')->group(function () {
    Route::get('login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('login-post', [LoginController::class, 'loginPost'])->name('admin.loginPost');
});

Route::prefix('admin/')->middleware('auth')->group(function () {
  Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
  Route::prefix('post/')->group(function() {
    Route::get('create', [PostController::class, 'create'])->name('admin.post.create');
    Route::post('store', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::post('update/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::get('delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete');
  });
});