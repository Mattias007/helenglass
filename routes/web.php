<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\App;

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
    App::setLocale('et');
    return view('avaleht');
})->name('homepage');


Route::get('/en', function () {
    App::setLocale('en');
    return view('avaleht');
})->name('homepage');


Route::get('/category', function () {
    $categories = DB::table('gallery')->where('state', 'category')->orderBy('id', 'DESC')->paginate(5);
    $amount = DB::table('gallery')->get();
    $total = $amount->count();
    return view('kategooria', [
        'categories' => $categories,
        'total' => $total
    ]);
})->name('category');


Route::get('/gallery/{id}', function ($id) {
    $images = DB::table('gallery')->where('state', 'image')->where('category_id', $id)->orderBy('id', 'DESC')->paginate(5);
    $amount = DB::table('gallery')->where('category_id', $id)->get();
    $total = $amount->count();
    return view('galerii', [
        'images' => $images,
        'total' => $total,
        'id' => $id
    ]);
})->name('gallery');

Route::get('/contact', function () {
    return view('kontakt');
})->name('contact');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/category/create', function () {
        return view('admin/category-create');
    })->middleware(['auth', 'verified'])->name('category-create');
    Route::post('/category/create/post', [AdminController::class, 'createCategory'])->name('admin.category.create');
    
    Route::get('/image/add', function () {
        return view('admin/image-add');
    })->middleware(['auth', 'verified'])->name('image-add');
    
    Route::get('/gallery/add', function () {
        return view('admin/gallery-add');
    })->middleware(['auth', 'verified'])->name('gallery-add');
});

require __DIR__.'/auth.php';
