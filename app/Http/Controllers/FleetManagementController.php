<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buses;

class FleetManagementController extends Controller
{
    public function index()
    {
        $buses = Buses::all(); // Fetch all 
        return view('fleet-status', compact('buses'));
    }

    public function store(Request $request)
{
    $request->validate([
        'bus_number' => 'required|string|max:255',
        'plate_number' => 'required|string|max:255',
        'capacity' => 'required|numeric', // Assuming capacity is numeric
        'status' => 'required|in:1,2,3', // Assuming status is limited to specific values
    ]);

    $status = '';
    if ($request->status === 'Available') {
        $status = 'Available';
    } elseif ($request->status === 'In Service') {
        $status = 'In Service';
    } elseif ($request->status === 'Under Maintenance') {
        $status = 'Under Maintenance';
    } else {
        // Handle invalid status if needed
        $status = 'Unknown'; // Default or error value
    }

    Buses::create([
        'BusNumber' => $request->bus_number,
        'PlateNumber' => $request->plate_number,
        'Capacity' => $request->capacity,
        'Status' => $request->status,
    ]);

    return redirect()->route('fleet-status')->with('success');
}  

}
