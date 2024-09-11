<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Route Scheduling') }}
        </h2>
    </x-slot>

    <h1>Edit Route</h1>
    <form action="{{ route('routes.update', $route->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="route_name">Route Name</label>
            <input type="text" name="route_name" class="form-control" value="{{ $route->route_name }}" required>
        </div>
        <div class="form-group">
            <label for="start_point">Start Point</label>
            <input type="text" name="start_point" class="form-control" value="{{ $route->start_point }}" required>
        </div>
        <div class="form-group">
            <label for="end_point">End Point</label>
            <input type="text" name="end_point" class="form-control" value="{{ $route->end_point }}" required>
        </div>
        <div class="form-group">
            <label for="departure_time">Departure Time</label>
            <input type="time" name="departure_time" class="form-control" value="{{ $route->departure_time }}" required>
        </div>
        <div class="form-group">
            <label for="arrival_time">Arrival Time</label>
            <input type="time" name="arrival_time" class="form-control" value="{{ $route->arrival_time }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Route</button>
    </form>

</x-app-layout>