<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/admin/pages/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
    Route::get('/admin/categories/home', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
    Route::get('/admin/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
    Route::post('/admin/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
    Route::get('/admin/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/admin/categories/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    Route::get('/admin/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('categories.delete');
});
