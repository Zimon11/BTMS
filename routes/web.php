<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route Scheduling
Route::get('/route-sched', function () {
    return view('route-sched');
})->middleware(['auth', 'verified'])->name('route-sched');

Route::get('/route.create', function () {
    return view('route.create');
})->middleware(['auth', 'verified'])->name('route.create');

Route::get('/route-scheduling', [RouteController::class, 'index'])->name('route.scheduling'); // Main page
Route::get('/route-scheduling/create', [RouteController::class, 'create'])->name('routes.create'); // Create form
Route::post('/route-scheduling', [RouteController::class, 'store'])->name('routes.store'); // Store route
Route::get('/route-scheduling/{id}/edit', [RouteController::class, 'edit'])->name('routes.edit'); // Edit form
Route::put('/route-scheduling/{id}', [RouteController::class, 'update'])->name('routes.update'); // Update route
Route::delete('/route-scheduling/{id}', [RouteController::class, 'destroy'])->name('routes.destroy'); // Delete route

//Driver Management
Route::get('/driver-management', function () {
    return view('driver-management');
})->middleware(['auth', 'verified'])->name('driver-management');

Route::get('/fleet-management', function () {
    return view('fleet-management');
})->middleware(['auth', 'verified'])->name('fleet-management');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
