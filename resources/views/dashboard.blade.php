<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot:main>
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
    </x-slot:main>
</x-app-layout>
