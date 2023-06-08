<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\UserController;
use App\Models\Book;
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

Route::prefix('customers/')->name('customers.')->group(function () {
    Route::get('create',[UserController::class,'create'])->name('create');
    Route::get('index',[UserController::class,'index'])->name('index');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::delete('destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::put('update/{id}', [UserController::class, 'update'])->name('update');
    Route::get('search', [UserController::class, 'search'])->name('search');
    Route::get('download/{id}', [UserController::class,'download'])->name('download');
    Route::get('contact', [UserController::class,'contact'])->name('contact');
});

Route::prefix('admin/')->middleware(['auth','my.admin'])->name('admin.')->group(function () {
    Route::get('create',[BookController::class,'create'])->name('create');
    Route::get('index',[BookController::class,'index'])->name('index');
    Route::post('store', [BookController::class, 'store'])->name('store');
    Route::get('edit/{id}', [BookController::class, 'edit'])->name('edit');
    Route::delete('destroy/{id}', [BookController::class, 'destroy'])->name('destroy');
    Route::put('update/{id}', [BookController::class, 'update'])->name('update');

});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';