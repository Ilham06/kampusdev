<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontpage\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.home');
// });

Auth::routes(['register' => false]);



Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/{slug}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/', [CategoryController::class, 'store'])->name('category.store');
    Route::put('category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/{slug}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('project/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/project/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');

    Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
    Route::get('/review/create', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/review/get-form', [ReviewController::class, 'getForm'])->name('review.get-form');
    Route::post('/review', [ReviewController::class, 'store'])->name('review.store');
    Route::delete('/review/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');

    Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
    Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
    Route::get('/testimoni/{id}', [TestimoniController::class, 'edit'])->name('testimoni.edit');
    Route::post('testimoni/', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::put('testimoni/{id}', [TestimoniController::class, 'update'])->name('testimoni.update');
    Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');
});

Route::get('/write-review/{id}', [ReviewController::class, 'write'])->name('review.write');
Route::get('/write-review/{id}/success', [ReviewController::class, 'success'])->name('review.success');

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/project/{slug}', [HomeController::class, 'detail'])->name('project.detail');
Route::get('/project', [HomeController::class, 'list'])->name('project.list');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('aboutme');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/kebijakan-layanan', [HomeController::class, 'kebijakanlayanan'])->name('kebijakanlayanan');
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');
Route::get('/artikel', [HomeController::class, 'article'])->name('article');
