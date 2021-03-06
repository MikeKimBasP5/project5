@if(Auth::check() && !Auth::user()->hasRole("admin"))
    <script>
        window.location.href = '{{route("dashboard")}}';
    </script>
@endif
@if(Auth::check() && Auth::user()->hasRole("admin"))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                </div>
                <x-button onClick="document.location.href='{{route('performances.index')}}'">performances</x-button>
                <x-button onClick="document.location.href='{{route('exercises.index')}}'">exercises</x-button>
                <x-button onClick="document.location.href='{{route('users.index')}}'">users</x-button>
            </div>
        </div>
    </div>
</x-app-layout>
@else
    <p>This link is invalid.</p>
@endif
