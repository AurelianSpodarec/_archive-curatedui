<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Controllers\Inspiration\PageController;
use App\Http\Controllers\Inspiration\ComponentController;
use App\Http\Controllers\Inspiration\OGImageController;


Route::get('/', function() {
    return view('index');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/site.php';


Route::controller(PageController::class)->group(function() {
    Route::get('/inspiration/pages/{category?}', 'index')->name('pages.index');
});

Route::controller(ComponentController::class)->group(function() {
    Route::get('/inspiration/components', 'index')->name('components.index');
    Route::get('/inspiration/components/{componentCategory:slug}', 'show')->name('components.show');
});

Route::controller(OGImageController::class)->group(function() {
    Route::get('/inspiration/og-images', 'index')->name('og-images.index');
});

// Route::controller(TemplateController::class)->group(function() {
//     Route::get('/templates', 'index')->name('templates.index');
// });

// Route::controller(PageController::class)->group(function() {
//     Route::get('/inspiration/pages', 'index')->name('pages.index');
//     Route::get('/inspiration/pages/{pageName:slug}', 'show')->name('pages.index');
// });

// Route::controller(PageListingController::class)->group(function() {
//     Route::get('/inspiration/pages', 'index')->name('pages.index');
//     Route::get('/inspiration/pages/{pageName:slug}', 'show')->name('pages.index');
// });

// Route::controller(PageController::class)->group(function() {
//     Route::get('/inspiration/pages', 'index')->name('pages.index');
//     Route::get('/inspiration/pages/{page:slug}', 'show')->name('pages.index');
// });