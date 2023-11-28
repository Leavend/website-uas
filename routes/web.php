<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CafeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/login-admin', [AuthController::class, 'login'])->name('login');
Route::post('/masuk', [AuthController::class, 'authLogin'])->name('auth.login');
Route::get('/keluar', [AuthController::class, 'authLogout'])->name('auth.logout');

Route::middleware(['admin'])->group(function () {

    Route::prefix('admin')->group(function () {
        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        // Admin
        Route::get('/admin-list', [AdminController::class, 'listAdmin'])->name('admin.list'); // Read
        Route::get('/admin-add', [AdminController::class, 'addAdmin'])->name('admin.add');
        Route::post('/admin-insert', [AdminController::class, 'insertAdmin'])->name('admin.insert'); // Create
        Route::get('/admin-edit/{id}', [AdminController::class, 'editAdmin'])->name('admin.edit');
        Route::post('/admin-edit/{id}', [AdminController::class, 'updateAdmin'])->name('admin.update'); // Update
        Route::get('/admin-delete/{id}', [AdminController::class, 'deleteAdmin'])->name('admin.delete'); // Delete

        // Profile admin
        Route::get('/admin-profile', [AdminController::class, 'profileAdmin'])->name('admin.profile');
        Route::post('/admin-profile', [AdminController::class, 'updateAdmin'])->name('admin.profile.update'); // Update
        Route::post('/admin-profile/upload', [AdminController::class, 'uploadImageProfile'])->name('admin.profile.upload'); // Update
        

        // Cafe
        Route::get('/cafe-list', [CafeController::class, 'listCafe'])->name('cafe.list');
        Route::get('/cafe-add', [CafeController::class, 'addCafe'])->name('cafe.add');
        Route::post('/cafe-insert', [CafeController::class, 'insertCafe'])->name('cafe.insert');
        Route::get('/cafe-edit/{id}', [CafeController::class, 'editCafe'])->name('cafe.edit');
        Route::post('/cafe-edit/{id}', [CafeController::class, 'updateCafe'])->name('cafe.update');
        Route::get('/cafe-delete/{id}', [CafeController::class, 'deleteCafe'])->name('cafe.delete');
    });

});