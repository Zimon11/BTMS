<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Route Scheduling') }}
        </h2>
    </x-slot>

    <x-slot:main>
        <table class="table-auto border-collapse border border-gray-300 w-full text-left">
            <thead>
              <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">Header 1</th>
                <th class="border border-gray-300 px-4 py-2">Header 2</th>
                <th class="border border-gray-300 px-4 py-2">Header 3</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border border-gray-300 px-4 py-2">Data 1</td>
                <td class="border border-gray-300 px-4 py-2">Data 2</td>
                <td class="border border-gray-300 px-4 py-2">Data 3</td>
              </tr>
              <tr class="bg-gray-100">
                <td class="border border-gray-300 px-4 py-2">Data 4</td>
                <td class="border border-gray-300 px-4 py-2">Data 5</td>
                <td class="border border-gray-300 px-4 py-2">Data 6</td>
              </tr>
            </tbody>
          </table>          
    </x-slot:main>
</x-app-layout>
