<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LightController;
use App\Http\Controllers\TemperatureSensorController;
use App\Http\Controllers\SecuritySystemController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['role:admin'])->group(function () {
//     Route::resource('lights', LightController::class);
//     Route::resource('temperature-sensors', TemperatureSensorController::class);
//     Route::resource('security-systems', SecuritySystemController::class);
// });

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('/admin/lights', 'LightController')->except(['show']);
    Route::resource('/admin/temperature-sensors', 'TemperatureSensorController')->except(['show']);
    Route::resource('/admin/security-systems', 'SecuritySystemController')->except(['show']);
});

require __DIR__.'/auth.php';
