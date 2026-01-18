<?php

use App\Http\Controllers\AuthController;

Route::prefix('auth')->name('auth.')->group(function() {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});