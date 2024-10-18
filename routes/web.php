<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/about', [AboutController::class,'about'])->name('about');
Route::get('/services', [ServiceController::class,'services'])->name('services');
Route::get('/quality', [ServiceController::class,'quality'])->name('quality');
Route::get('/products', [ProductController::class,'products'])->name('products');
Route::get('/blogs', [BlogController::class,'blogs'])->name('blogs');
Route::get('/gallery', [GalleryController::class,'gallery'])->name('gallery');
Route::get('/team', [TeamController::class,'team'])->name('team');
Route::get('/contact', [ContactController::class,'contact'])->name('contact');
Route::get('/careers', [CareersController::class,'careers'])->name('careers');
