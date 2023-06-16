<?php

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
    return view('guest.home');
});

Route::get('/homeadmin', [\App\Http\Controllers\ProductController::class, "homeadmin"]);
Route::get('/list', [\App\Http\Controllers\ProductController::class, "list"])->name("list");
Route::delete('/list/{product}', [\App\Http\Controllers\ProductController::class, "delete"])->name("delete");
Route::get('/create', [\App\Http\Controllers\ProductController::class, "create"])->name("create-form");
Route::post('/create', [\App\Http\Controllers\ProductController::class, "save"])->name('create-product');
Route::get('/edit/{product}', [\App\Http\Controllers\ProductController::class, "edit"])->name('edit-product');
Route::put('/edit/{product}', [\App\Http\Controllers\ProductController::class, "update"])->name('update-product');











Route::get('/category/list', [\App\Http\Controllers\CategoryController::class, "list"])->name("list-category");
Route::delete('/category/list/{category}', [\App\Http\Controllers\CategoryController::class, "delete"])->name("delete-category");
Route::get('/category/create', [\App\Http\Controllers\CategoryController::class, "create"])->name("form-category");
Route::post('/category/create', [\App\Http\Controllers\CategoryController::class, "save"])->name("add-category");
Route::get('/category/edit/{category}', [\App\Http\Controllers\CategoryController::class, "edit"])->name("edit-category");
Route::put('/category/edit/{category}', [\App\Http\Controllers\CategoryController::class, "update"])->name("update-category");












Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
