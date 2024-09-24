<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FleetManagementController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteSchedulingController;
use App\Http\Controllers\DriverController;
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
Route::post('route-sched', [RouteSchedulingController::class, 'store'])->name('route-sched');
Route::get('fleet-status', [FleetManagementController::class, 'index'])->name('fleet-status');
Route::post('fleet-status', [FleetManagementController::class, 'store'])->name('fleet-status');

Route::middleware('auth', 'admin','super-admin','driver')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('superadmin', [SuperAdminController::class, 'makeAdmin'])->name('superadmin.makeAdmin');
});
// routes/web.php
Route::prefix('driver')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DriverController::class, 'dashboard'])->name('driver.dashboard');
    Route::get('/profile', [DriverController::class, 'profile'])->name('driver.profile');
    Route::post('/checkin', [DriverController::class, 'checkIn'])->name('driver.checkin');
    Route::post('/checkout', [DriverController::class, 'checkOut'])->name('driver.checkout');
    Route::get('/schedule', [DriverController::class, 'schedule'])->name('driver.schedule');
});


require __DIR__.'/auth.php';
