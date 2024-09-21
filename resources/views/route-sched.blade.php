<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Route Scheduling') }}
        </h2>
    </x-slot>

    <x-slot:main>
      <div class="container mx-auto p-6">
        <div class="inline-flex space-x-5 mb-3">
            <!-- Drivers -->
            <a href="#" class="flex items-center justify-between p-4 bg-blue-600 hover:bg-blue-500 transition-colors duration-300 rounded-lg space-x-2">
                <i class="ti ti-user text-white text-xl"></i>
                <h1 class="text-white font-semibold">Drivers</h1>
            </a>
        
            <!-- Buses -->
            <a href="#" class="flex items-center justify-between p-4 bg-blue-600 hover:bg-blue-500 transition-colors duration-300 rounded-lg space-x-2">
                <i class="ti ti-bus text-white text-xl"></i>
                <h1 class="text-white font-semibold">Buses</h1>
            </a>
        </div>
        
        <!-- Header -->
        <header class="mb-6 flex justify-end">
            <x-primary-button id="openModalButton" >Create Route</x-primary-button>
        </header>
        
        <!-- Route Scheduling Table -->
        <section class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Route Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Location</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End Location</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Distance</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">AI Optimized</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($routes as $route)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $route->RouteName }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $route->StartLocation }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $route->EndLocation }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $route->Distance }} km</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-500">{{ $route->AI_OptimizedRoute ? 'Yes' : 'No' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600 hover:text-blue-900">
                            <a href="#">Edit</a> | <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
        </section>
    </div>

    <div id="modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-blue-200 shadow-lg rounded-lg max-w-lg w-full mx-4">
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Add New Route</h2>
                <form action="{{ route('route-sched') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="route_name" class="block text-sm font-medium text-gray-700">Route Name</label>
                        <input type="text" id="route_name" name="route_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="start_location" class="block text-sm font-medium text-gray-700">Start Location</label>
                        <input type="text" id="start_location" name="start_location" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="end_location" class="block text-sm font-medium text-gray-700">End Location</label>
                        <input type="text" id="end_location" name="end_location" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="distance" class="block text-sm font-medium text-gray-700">Distance (km)</label>
                        <input type="number" id="distance" name="distance" step="0.01" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="ai_optimized" class="flex items-center">
                            <input type="checkbox" id="ai_optimized" name="ai_optimized" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-600">AI Optimized</span>
                        </label>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-600">Save</button>
                        <button type="button" id="closeModalButton" class="ml-2 px-4 py-2 bg-gray-300 text-gray-700 font-bold rounded hover:bg-gray-400">Cancel</button>
                    </div>
                </form>     
            </div>
        </div>
    </div>
    
    <script>
        document.getElementById('openModalButton').addEventListener('click', function() {
            document.getElementById('modal').classList.remove('hidden');
        });

        document.getElementById('closeModalButton').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });
    </script>         
    </x-slot:main>
</x-app-layout>