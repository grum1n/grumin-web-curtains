<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/frontend/pages/{page}', 'singlePage')->name('frontendNavLink');
    Route::get('/main-gallery', 'frontendGallery')->name('frontendGallery');
    Route::get('/contact', 'contact')->name('contact');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resource('pages', PageController::class);

    Route::resource('contacts', ContactController::class);

    Route::resource('gallery', GalleryController::class);
});
