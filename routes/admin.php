<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    AdminPublicationController,
    AdminUserController,
    AdminAuthController
};

/*
|--------------------------------------------------------------------------
| Routes Admin
|--------------------------------------------------------------------------
*/

// Auth routes
Route::middleware('web')->group(function () {
    Route::get('admin/login', [AdminAuthController::class, 'login'])->name('adminauth.login');
    Route::post('admin/authenticate', [AdminAuthController::class, 'authenticate'])->name('adminauth.authenticate');
    Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('adminauth.logout');
});

// Protected routes
Route::middleware(['web', 'admin.auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('publications', AdminPublicationController::class);
    Route::resource('users', AdminUserController::class);
    Route::delete('images/{image}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('images.destroy');
});