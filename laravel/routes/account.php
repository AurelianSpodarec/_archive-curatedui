<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\AccountSettingsController;
  


Route::get('/account', [AccountController::class, 'index'])->name('account.index');


Route::get('/account/settings', [AccountSettingsController::class, 'index'])->name('account/settings');



// Route::get('/account', [ResourceController::class, 'index'])->name('resources');
// Route::get('/account/edit', [ResourceController::class, 'index'])->name('resources');
// Route::get('/account/password', [ResourceController::class, 'index'])->name('resources');

// Route::get('/account/nottifications', [ResourceController::class, 'index'])->name('resources');
// Route::get('/account/settings', [ResourceController::class, 'index'])->name('resources');
// Route::get('/account/subscriptions', [ResourceController::class, 'index'])->name('resources');
// Route::get('/account/privacy', [ResourceController::class, 'index'])->name('resources');

// Route::get('/account/invoices', [ResourceController::class, 'index'])->name('resources');
// Route::get('/account/invoices/edit', [ResourceController::class, 'index'])->name('resources');
// Route::get('/account/referrals', [ResourceController::class, 'index'])->name('resources');



// Route::get('/@{username}', [ResourceController::class, 'index'])->name('resources'); // user profile
// Route::get('/@{username}/liked', [ResourceController::class, 'index'])->name('resources'); // user profile
// Route::get('/@{username}/collections', [ResourceController::class, 'index'])->name('resources'); // user profile
// Route::get('/@{username}', [ResourceController::class, 'index'])->name('resources'); // user profile