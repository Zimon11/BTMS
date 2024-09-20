<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RouteSchedulingController extends Controller
{
    public function index()
    {
        $routes = Route::all(); // Fetch all routes
        return view('route-sched', compact('routes'));
    }

    public function store(Request $request)
{
    $request->validate([
        'route_name' => 'required|string|max:255',
        'start_location' => 'required|string|max:255',
        'end_location' => 'required|string|max:255',
        'distance' => 'required|numeric|min:0',
        'ai_optimized' => 'nullable|boolean',
    ]);

    Route::create([
        'RouteName' => $request->route_name,
        'StartLocation' => $request->start_location,
        'EndLocation' => $request->end_location,
        'Distance' => $request->distance,
        'AI_OptimizedRoute' => $request->ai_optimized ? true : false,
    ]);

    return redirect()->route('route-sched')->with('success', 'Route added successfully.');
}

}
