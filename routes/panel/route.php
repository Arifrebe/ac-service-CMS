<?php

use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\MemberController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, "index"])->name('dashboard');

    Route::prefix('member')->name('member.')->group(function() {
        Route::get('/', [MemberController::class, 'index'])->name('index');
        Route::get('/create', [MemberController::class, 'create'])->name('create');
    });
});