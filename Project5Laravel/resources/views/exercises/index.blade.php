@extends('layouts.main')
@section('title')
    {{ __('exercises') }}
@endsection

@section('content')
    <div class="container items-center">
        @foreach ($exercises as $exercise)
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-6">
                    <p>{{ $exercise->titleEN }}</p>
                    <p>{{ $exercise->titleNL }}</p>
                    {{ $exercise->instructionNL }}
                    <div class="inline-flex gap-1 mb-1">
                        <form  method="get">
                            <x-button class="ml-3 bg-blue-500 w-32">
                                {{ __('Wijzig') }}
                            </x-button>
                        </form>
                        <form  method="post">
                            @method('delete')
                            @csrf
                            <x-button class="ml-3 bg-red-500 w-32">
                                {{ __('Verwijder') }}
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
