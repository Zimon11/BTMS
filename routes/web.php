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

//Route Scheduling
Route::get('/route-bus-stop', function () {
    return view('route-bus-stop');
})->middleware(['auth', 'verified'])->name('route-bus-stop');

//Route Scheduling
Route::get('/route-timetable', function () {
    return view('route-timetable');
})->middleware(['auth', 'verified'])->name('route-timetable');

Route::get('/route-holiday', function () {
    return view('route-holiday');
})->middleware(['auth', 'verified'])->name('route-holiday');

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
