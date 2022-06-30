@extends('layouts.main')
@section('title')
    {{ __('Exercises') }}
@endsection

@section('content')
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center w-full">
        <div></div>
        <form method="POST" class="w-full grid grid-rows-1 place-content-center" action="{{ route('exercises.update', ['id' => $exercise->id]) }}">
            @method('PUT')
            @csrf
            <label for="titleEN">TitleEN:</label>
            <input class="bg-gray-200" name="titleEN" type="text" value="{{$exercise->titleEN}}">
            <label for="titleNL">TitleNL:</label>
            <input class="bg-gray-200" name="titleNL" type="text" value="{{$exercise->titleNL}}">
            <label for="instructionEN">InstructionEN:</label>
            <textarea class="bg-gray-200" name="instructionEN" type="text">{{$exercise->instructionEN}}</textarea>
            <label for="instructionNL">InstructionNL:</label>
            <textarea class="bg-gray-200" name="instructionNL" type="text">{{$exercise->instructionNL}}</textarea>
            <label for="media">Media:</label>
            <input class="bg-gray-200"  name="media" type="url" value="{{$exercise->media}}">

            <br>
            <x-button class="cursor-pointer bg-green-400 text-center">Edit</x-button>

        </form>
        <div></div>
    </div>
@endsection
