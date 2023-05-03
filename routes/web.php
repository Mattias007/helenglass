<?php

use App\Http\Controllers\ProfileController;
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
    return view('avaleht');
})->name('avaleht');

Route::get('/kategooria', function () {
    return view('kategooria');
})->middleware(['auth', 'verified'])->name('kategooria');


Route::get('/galerii', function () {
    return view('galerii');
})->middleware(['auth', 'verified'])->name('galerii');

Route::get('/kontakt', function () {
    return view('kontakt');
})->middleware(['auth', 'verified'])->name('kontakt');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/category/create', function () {
        return view('admin/category-create');
    })->middleware(['auth', 'verified'])->name('category-create');
    
    Route::get('/image/add', function () {
        return view('admin/image-add');
    })->middleware(['auth', 'verified'])->name('image-add');
    
    Route::get('/gallery/add', function () {
        return view('admin/gallery-add');
    })->middleware(['auth', 'verified'])->name('gallery-add');
});

require __DIR__.'/auth.php';
