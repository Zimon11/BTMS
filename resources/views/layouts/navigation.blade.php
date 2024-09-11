<div class="flex">
    <!-- Sidebar -->
    <nav class="bg-gray-200 w-64 border border-gray-300 rounded-lg mt-2 ml-2 mb-2">
        <!-- Sidebar Navigation Menu -->
        <div class="flex flex-col h-screen bg-gray-200 text-gray-700 w-64 rounded-lg">
            <div class="px-4 py-6">
                <!-- Logo -->
                <div class="flex min-w-10 items-center border-b p-10 mb-5 border-gray-300 justify-center h-16">
                    <a href="{{ route('dashboard') }}">
                        <h1>Robus Transpo System</h1>
                    </a>
                    
                </div>

                <!-- Navigation Links -->
                <div class="space-y-4">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex items-center space-x-4 py-2">
                        <!-- Dashboard Icon -->
                        <svg class="w-6 h-6 text-gray-500 hover:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 13h8V3H3v10zM13 21v-6h8v6h-8zM3 21v-6h8v6H3zM13 3h8v10h-8V3z"/>
                        </svg>
                        <span>{{ __('Dashboard') }}</span>
                    </x-nav-link>
        
                    <x-nav-link :href="route('route-sched')" :active="request()->routeIs('route-sched')" class="flex items-center space-x-4 py-2 mt-2">
                        <!-- Route Scheduling Icon -->
                        <svg class="w-6 h-6 text-gray-500 hover:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 8h8M4 8h2m4 8h8M4 16h2M8 12h8m4 0h2M4 12h2m0 0V4"/>
                        </svg>
                        <span>{{ __('Route Scheduling') }}</span>
                    </x-nav-link>
        
                    <x-nav-link :href="route('driver-management')" :active="request()->routeIs('driver-management')" class="flex items-center space-x-4 py-2 mt-2">
                        <!-- Driver Management Icon -->
                        <svg class="w-6 h-6 text-gray-500 hover:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm6 7v-1a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v1m15-6a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                        </svg>
                        <span>{{ __('Driver Management') }}</span>
                    </x-nav-link>
        
                    <x-nav-link :href="route('fleet-management')" :active="request()->routeIs('fleet-management')" class="flex items-center space-x-4 py-2 mt-2">
                        <!-- Fleet Management Icon -->
                        <svg class="w-6 h-6 text-gray-500 hover:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 19h18v2H3v-2zM21 7h-4V5a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v2H3v5h18V7z"/>
                        </svg>
                        <span>{{ __('Fleet Management') }}</span>
                    </x-nav-link>
                </div>
            </div>
        </div>
    </nav>


    <!-- Main Content Wrapper -->
    <div class="w-full">
        <div class="bg-white border-2 border-solid shadow-md rounded-md p-5 mt-4 mr-4 ml-4">
            <!-- User Info and Settings -->
            <div class="flex justify-between">
                {{ $header }}
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-6">
                <!-- Your main content goes here -->
            </div>
        </div>
    </div>
</div>
