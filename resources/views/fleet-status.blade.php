<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Status') }}
        </h2>
    </x-slot>

    <x-slot:main>
        <div class="container mx-auto p-6">
        <x-primary-button id="openModalButton">Add New Bus</x-primary-button>
        <section class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bus Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Plate Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capacity</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($buses as $bus)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $bus->BusNumber }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $bus->PlateNumber }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $bus->Capacity }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-500">{{ $bus->Status }}</td> 
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
                                <h2 class="text-lg font-semibold text-gray-700 mb-4">Add New bus</h2>
                                <form action="{{ route('fleet-status') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="bus_number" class="block text-sm font-medium text-gray-700">Bus no.</label>
                                        <input type="text" id="bus_number" name="bus_number" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="plate_number" class="block text-sm font-medium text-gray-700">Plate Number</label>
                                        <input type="text" id="plate_number" name="plate_number" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
                                        <input type="text" id="capacity" name="capacity" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                        <select id="status" name="status" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="1">Available</option>
                                            <option value="2">In Service</option>
                                            <option value="3">Under Maintenance</option>
                                        </select>
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
