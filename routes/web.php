<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/', [\App\Http\Controllers\Frontend\FrontendController::class, 'index']);

Route::get('/home', [\App\Http\Controllers\Admin\FrontendController::class, 'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/*Route::middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/dashboard', function (){
        return "Admin";
    });

});*/

Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('/private', [App\Http\Controllers\Admin\FrontendController::class, 'index'])->name('admin.index');
    Route::get('categories', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin.category.add');
    Route::post('insert-category', [App\Http\Controllers\Admin\CategoryController::class, 'insert']);
    Route::get('edit-category/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('update-category/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']);


    Route::get('products', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products.index');
    Route::get('add-products', [\App\Http\Controllers\Admin\ProductController::class, 'add'])->name('admin.products.add');
    Route::post('insert-product',[\App\Http\Controllers\Admin\ProductController::class, 'insert']);
    Route::get('edit-product/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('update-product/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update']);
    Route::get('delete-product/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy']);

});
