<?php

// app/Http/Controllers/RouteController.php
namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    // Display the list of routes
    public function index()
    {
        $routes = Route::all();
        dd($routes);
        return view('route-sched', compact('routes')); // Use 'route-sched' as the view name
    }

    // Show form to create a new route
    public function create()
    {
        return view('create'); // Use 'create' as the view name
    }

    // Store a newly created route
    public function store(Request $request)
    {
        $request->validate([
            'route_name' => 'required|string',
            'start_point' => 'required|string',
            'end_point' => 'required|string',
            'departure_time' => 'required',
            'arrival_time' => 'required',
        ]);

        Route::create($request->all());
        return redirect()->route('route.scheduling')->with('success', 'Route created successfully');
    }

    // Show form to edit a route
    public function edit($id)
    {
        $route = Route::findOrFail($id);
        return view('edit', compact('route')); // Use 'edit' as the view name
    }

    // Update an existing route
    public function update(Request $request, $id)
    {
        $request->validate([
            'route_name' => 'required|string',
            'start_point' => 'required|string',
            'end_point' => 'required|string',
            'departure_time' => 'required',
            'arrival_time' => 'required',
        ]);

        $route = Route::findOrFail($id);
        $route->update($request->all());
        return redirect()->route('route.scheduling')->with('success', 'Route updated successfully');
    }

    // Delete a route
    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $route->delete();
        return redirect()->route('route.scheduling')->with('success', 'Route deleted successfully');
    }
}
