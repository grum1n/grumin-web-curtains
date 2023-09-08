<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/frontend/pages/about', 'about')->name('navAbout');
    Route::get('/frontend/pages/services', 'services')->name('navServices');
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

    Route::resource('about', AboutPageController::class);

    Route::resource('services', ServiceController::class);
});
