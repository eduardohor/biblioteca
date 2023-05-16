<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UserController;
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

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users/create', [UserController::class, 'store'])->name('users.store');
Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/edit/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('genders', [GenderController::class, 'index'])->name('genders.index');
Route::get('gender/create', [GenderController::class, 'create'])->name('genders.create');
Route::post('gender/create', [GenderController::class, 'store'])->name('genders.store');
Route::get('gender/edit/{id}', [GenderController::class, 'edit'])->name('genders.edit');
Route::put('gender/edit/{id}', [GenderController::class, 'update'])->name('genders.update');
Route::delete('gender/delete/{id}', [GenderController::class, 'destroy'])->name('genders.destroy');

Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::post('books/create', [BookController::class, 'store'])->name('books.store');
Route::get('books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('books/edit/{id}', [BookController::class, 'update'])->name('books.update');


