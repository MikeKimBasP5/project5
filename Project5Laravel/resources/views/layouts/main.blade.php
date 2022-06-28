<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline">
            @yield('title')
        </h2>




    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white opacity-95 overflow-hidden shadow-sm sm:rounded-lg grid grid-rows-1 place-content-center">
                <x-button onclick="history.back()" class="text-center">Go Back</x-button>
                <div class="p-6 bg-white border-b border-gray-200">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>