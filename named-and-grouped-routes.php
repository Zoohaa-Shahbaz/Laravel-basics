<?php

use Illuminate\Support\Facades\Route;

// Named route: welcome
Route::get('/welcome', function () {
    return view('welcome');
})->name('mywelcome');

// Named route: post
Route::get('/post', function () {
    return view('post');
})->name('mypost');

// Named route: about (company)
Route::get('/company', function () {
    return view('about');
})->name('myabout');

// Redirect 'about' to 'company' with 301 (permanent) for SEO
Route::redirect('about', 'company', 301);

// Grouped routes with prefix 'page'
Route::prefix('page')->group(function () {

    Route::get('/gallery', function () {
        return "<h1>This is the gallery page</h1>";
    })->name('gallery');

    Route::get('/post/firstpost', function () {
        return "<h1>This is the first post page</h1>";
    })->name('firstpost');

    Route::get('/about', function () {
        return "<h1>This is the about page under /page</h1>";
    })->name('pageabout');
});
