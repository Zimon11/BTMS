<!-- resources/views/route-sched.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Route Scheduling') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('route.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Route</a>
                    
                    @if($routes->isEmpty())
                        <p>No routes available.</p>
                    @else
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th>Route Name</th>
                                    <th>Start Point</th>
                                    <th>End Point</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($routes as $route)
                                    <tr>
                                        <td>{{ $route->route_name }}</td>
                                        <td>{{ $route->start_point }}</td>
                                        <td>{{ $route->end_point }}</td>
                                        <td>{{ $route->departure_time }}</td>
                                        <td>{{ $route->arrival_time }}</td>
                                        <td>
                                            <a href="{{ route('route.edit', $route->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                                            <form action="{{ route('route.destroy', $route->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
