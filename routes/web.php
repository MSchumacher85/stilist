<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('categories/index');
});

Route::get('category/about', [CategoryController::class, 'about'])->name('category.about');
Route::get('category/blog', [CategoryController::class, 'blog'])->name('category.blog');
Route::get('category/blog-single', [CategoryController::class, 'blogSingle'])->name('category.blogSingle');
Route::get('category/contact', [CategoryController::class, 'contact'])->name('category.contact');
Route::get('category/services', [CategoryController::class, 'services'])->name('category.services');
Route::get('category/work', [CategoryController::class, 'work'])->name('category.work');
