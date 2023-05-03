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
});

require __DIR__.'/auth.php';
