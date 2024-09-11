<!-- resources/views/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Route') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('route.update', $route->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label>Route Name:</label>
                            <input type="text" name="route_name" value="{{ $route->route_name }}" required>
                        </div>
                        <div>
                            <label>Start Point:</label>
                            <input type="text" name="start_point" value="{{ $route->start_point }}" required>
                        </div>
                        <div>
                            <label>End Point:</label>
                            <input type="text" name="end_point" value="{{ $route->end_point }}" required>
                        </div>
                        <div>
                            <label>Departure Time:</label>
                            <input type="time" name="departure_time" value="{{ $route->departure_time }}" required>
                        </div>
                        <div>
                            <label>Arrival Time:</label>
                            <input type="time" name="arrival_time" value="{{ $route->arrival_time }}" required>
                        </div>
                        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Update Route</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
