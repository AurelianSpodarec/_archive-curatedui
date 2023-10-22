<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Inspiration\Site\SiteController;
use App\Http\Controllers\Inspiration\Site\SitePageController;
use App\Http\Controllers\Inspiration\Site\SiteComponentController;
use App\Http\Controllers\Inspiration\Site\SiteOGImageController;

Route::controller(SiteController::class)->group(function() {
    Route::get('/inspiration/sites', 'index')->name('site.index');
    Route::get('/inspiration/sites/{site:slug}', 'show')->name('site.show');
});

Route::controller(SitePageController::class)->group(function() {
    Route::get('/inspiration/sites/{site:slug}/website/pages', 'index')->name('site.index.pages');
});


Route::controller(SiteComponentController::class)->group(function() {
    Route::get('/inspiration/sites/{site:slug}/website/components', 'index')->name('site.index.components');
});

Route::controller(SiteOGImageController::class)->group(function() {
    Route::get('/inspiration/sites/{site:slug}/website/og-images', 'index')->name('site.index.og-images');
});

// SiteComponentController

// /inspiration/page/name-82392
// /inspiration/component/name-23298


// When user right clicks on a page card, open it on this URL:
// Route::controller(SitePageController::class)->group(function() {
//     Route::get('/inspiration/sites/{site:slug}/website/pages/{page:name}', 'index')->name('site.index.pages');
// });