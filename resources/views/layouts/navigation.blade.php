<div class="flex min-h-screen">
    <!-- Sidebar -->
    <nav class="bg-gray-200 w-65 border border-gray-300 rounded-lg mt-3 ml-5 mb-3 fixed top-0 left-0 h-[calc(100vh-24px)] overflow-x-hidden">
        <!-- Sidebar Navigation Menu -->
        <div class="flex flex-col bg-gray-200 text-gray-700 w-64 rounded-lg ">
            <div class="">
                <!-- Logo -->
                <div class="flex min-w-10 items-center border p-10 m-5 mb-10 border-gray-300 justify-center h-16">
                    <a href="{{ route('dashboard') }}">
                        <h1>Robus Transpo System</h1>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class=" py-1 mr-5">

                    <div class="w-full  flex justify-between">
                        <x-nav-border :active="request()->routeIs('dashboard')" ></x-nav-border>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex items-center space-x-4 py-2 w-full">
                                <!-- Dashboard Icon -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 13h8V3H3v10zM13 21v-6h8v6h-8zM3 21v-6h8v6H3zM13 3h8v10h-8V3z"/>
                            </svg>
                            <span>{{ __('Dashboard') }}</span>
                        </x-nav-link>
                    </div>
                    
                    <div class="w-full flex justify-between ">
                        <x-nav-border :active="request()->routeIs('route-sched')" :hasActiveSub="request()->routeIs('route-optimization') || request()->routeIs('route-timetable')" class="mt-1"></x-nav-border>
                        <x-nav-link :href="route('route-sched')" :active="request()->routeIs('route-sched')" 
                                :hasActiveSub="request()->routeIs('route-optimization') || request()->routeIs('route-timetable')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                        <!-- Route Scheduling Icon -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 8h8M4 8h2m4 8h8M4 16h2M8 12h8m4 0h2M4 12h2m0 0V4"/>
                        </svg>
                        <span>{{ __('Route Scheduling') }}</span>
                        </x-nav-link>
                    </div>
                            <!-- Sub-Links -->
                            <div class="pl-7">
                                <x-nav-sub :href="route('route-sched')" :active="request()->routeIs('route-sched')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                                    <span>{{ __('Route Creating/Editing') }}</span>
                                </x-nav-sub>
                            
                                <x-nav-sub :href="route('route-optimization')" :active="request()->routeIs('route-optimization')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                                    <span>{{ __('Ai Optimization') }}</span>
                                </x-nav-sub>
                            
                                <x-nav-sub :href="route('route-timetable')" :active="request()->routeIs('route-timetable')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                                    <span>{{ __('Timetable') }}</span>
                                </x-nav-sub>
                            
                            </div>
                    
                   

                    <div class="w-full  flex justify-between">
                        <x-nav-border :active="request()->routeIs('driver-management')" :hasActiveSub="request()->routeIs('driver-verification') || request()->routeIs('driver-shifts')" class="mt-1"></x-nav-border>
                        <x-nav-link :href="route('driver-management')" :hasActiveSub="request()->routeIs('driver-verification') || request()->routeIs('driver-shifts')" :active="request()->routeIs('driver-management')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                                <!-- Driver Management Icon -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm6 7v-1a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v1m15-6a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                            </svg>
                            <span>{{ __('Driver') }}</span>
                        </x-nav-link>
                    </div>

                    <div class="pl-7">
                        <x-nav-sub :href="route('driver-management')" :active="request()->routeIs('driver-management')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                            <span>{{ __('Assignment') }}</span>
                        </x-nav-sub>
                    
                        <x-nav-sub :href="route('driver-verification')" :active="request()->routeIs('driver-verification')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                            <span>{{ __('Verification') }}</span>
                        </x-nav-sub>
                    
                        <x-nav-sub :href="route('driver-shifts')" :active="request()->routeIs('driver-shifts')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                            <span>{{ __('Shifts') }}</span>
                        </x-nav-sub>
                    </div>


                    <div class="w-full  flex justify-between">
                        <x-nav-border :active="request()->routeIs('fleet-management')" :hasActiveSub="request()->routeIs('fleet-monitoring') || request()->routeIs('fleet-status')" class="mt-1" ></x-nav-border>
                        <x-nav-link :href="route('fleet-management')" :active="request()->routeIs('fleet-management')" :hasActiveSub="request()->routeIs('fleet-monitoring') || request()->routeIs('fleet-status')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                            <!-- Fleet Management Icon -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 19h18v2H3v-2zM21 7h-4V5a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v2H3v5h18V7z"/>
                            </svg>
                            <span>{{ __('Fleet') }}</span>
                        </x-nav-link>
                    </div>

                    <div class="pl-7">
                        <x-nav-sub :href="route('fleet-management')" :active="request()->routeIs('fleet-management')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                            <span>{{ __('Maintenance') }}</span>
                        </x-nav-sub>
                    
                        <x-nav-sub :href="route('fleet-monitoring')" :active="request()->routeIs('fleet-monitoring')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                            <span>{{ __('Monitoring') }}</span>
                        </x-nav-sub>
                    
                        <x-nav-sub :href="route('fleet-status')" :active="request()->routeIs('fleet-status')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                            <span>{{ __('Status') }}</span>
                        </x-nav-sub>
                    </div>

                    <div class="w-full  flex justify-between">
                        <x-nav-border :active="request()->routeIs('real-time-data')" class="mt-1" ></x-nav-border>
                        <x-nav-link :href="route('real-time-data')" :active="request()->routeIs('real-time-data')" class="flex items-center space-x-4 py-2 mt-1  w-full">
                            <!-- Fleet Management Icon -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 19h18v2H3v-2zM21 7h-4V5a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v2H3v5h18V7z"/>
                            </svg>
                            <span>{{ __('Data Integration') }}</span>
                        </x-nav-link>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Wrapper --> 
    <div class="w-full bg-white m-3 flex-1 ml-72">
        <div class=" border-2 border-solid shadow-md rounded-md p-5 mr-4 ml-4 sticky top-3 backdrop-blur-md bg-transparent">
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

        <div class="max-w-7xl px-4 sm:px-6 lg:px-8  m-3 bg-white ">
                {{$main}}
        </div>
    </div>
</div>
</div>