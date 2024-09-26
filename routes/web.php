<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FleetManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteSchedulingController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\WelcomeController;


Route::any('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/driver/dashboard', function () {
    return view('driver/dashboard');
})->middleware(['auth', 'verified'])->name('driver.dashboard');

//Route Scheduling
Route::get('/route-sched', function () {
    return view('route-sched');
})->middleware(['auth', 'verified'])->name('route-sched');

//Route Scheduling
Route::get('/route-optimization', function () {
    return view('route-optimization');
})->middleware(['auth', 'verified'])->name('route-optimization');

//Route Scheduling
Route::get('/route-timetable', function () {
    return view('route-timetable');
})->middleware(['auth', 'verified'])->name('route-timetable');

//Driver Management
Route::get('/driver-management', function () {
    return view('driver-management');
})->middleware(['auth', 'verified'])->name('driver-management');

Route::get('/driver-shifts', function () {
    return view('driver-shifts');
})->middleware(['auth', 'verified'])->name('driver-shifts');

Route::get('/driver-verification', function () {
    return view('driver-verification');
})->middleware(['auth', 'verified'])->name('driver-verification');

Route::get('/fleet-management', function () {
    return view('fleet-management');
})->middleware(['auth', 'verified'])->name('fleet-management');

Route::get('/fleet-status', function () {
    return view('fleet-status');
})->middleware(['auth', 'verified'])->name('fleet-status');

Route::get('/fleet-monitoring', function () {
    return view('fleet-monitoring');
})->middleware(['auth', 'verified'])->name('fleet-monitoring');

Route::get('/real-time-data', function () {
    return view('real-time-data');
})->middleware(['auth', 'verified'])->name('real-time-data');

Route::get('route-sched', [RouteSchedulingController::class, 'index'])->name('route-sched');
Route::post('route-sched', [RouteSchedulingController::class, 'store'])->name('route-store');
Route::get('fleet-status', [FleetManagementController::class, 'index'])->name('fleet-status');
Route::post('fleet-status', [FleetManagementController::class, 'store'])->name('fleet-store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});

// Driver routes
Route::middleware(['auth', 'role:driver'])->group(function () {
    Route::get('driver/dashboard', [DriverController::class, 'index'])->name('driver.dashboard');
});


require __DIR__.'/auth.php';
