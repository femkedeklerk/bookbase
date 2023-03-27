<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/books', [\App\Http\Controllers\BooksController::class, 'index'])->name('books.index');
    Route::post('/books', [\App\Http\Controllers\BooksController::class, 'store'])->name('books.store');
    Route::delete('/books/{book}', [\App\Http\Controllers\BooksController::class, 'destroy'])->name('books.delete');
});

require __DIR__.'/auth.php';

Route::prefix('/admin')->group(function () {
    require __DIR__.'/auth.php';
    Route::middleware(['auth', 'verified', 'isadmin'])->group(function () {
        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/students', [\App\Http\Controllers\AdminController::class, 'students'])->name('admin.students');
    });
});
