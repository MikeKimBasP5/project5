@extends('layouts.main')
@section('title')
    {{ __('exercises') }}
@endsection

@section('content')
    <div class="container ">

    <form method="get" action="{{route('exercises.create')}}" class="text-center">
        <x-button class="ml-3 bg-green-500 w-full justify-center">
            {{ __('Add') }}
        </x-button>
        <br>
    </form>

        <table class="text-left">
            <tr>
                <th>Title En</th>
                <th>Title NL</th>
            </tr>
            @foreach ($exercises as $exercise)
                <tr>
                    <td>{{ $exercise->titleEN }}</td>
                    <td>{{ $exercise->titleNL }}</td>
                    <td>
                        <div class="inline-flex gap-1 mb-1">
                            <form method="get" action="{{ route('exercises.edit', ['id' => $exercise->id]) }}">
                                <x-button class="ml-3 bg-blue-500 md:w-32 w-16 place-content-center">
                                    {{ __('Wijzig') }}
                                </x-button>
                            </form>
                            <form method="post" action="{{route('exercises.destroy', ['id' => $exercise->id]) }}">
                                @method('delete')
                                @csrf
                                <x-button class="ml-3 bg-red-500 md:w-20 w-16 place-content-center">
                                    {{ __('X') }}
                                </x-button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
