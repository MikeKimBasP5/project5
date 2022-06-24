@extends('layouts.main')
@section('title')
    {{ __('performance') }}
@endsection

@section('content')
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center w-full">
        <div></div>
        <form method="POST" class=" w-2/5 grid grid-rows-1 place-content-center" action="{{ route('exercises.store') }}">
            @csrf
            <label for="titleEN">TitleEN:</label>
            <input class="bg-gray-200" name="titleEN" type="text">
            <label for="titleNL">TitleNL:</label>
            <input class="bg-gray-200" name="titleNL" type="text">
            <label for="instructionEN">InstructionEN:</label>
            <textarea class="bg-gray-200" name="instructionEN" type="text"></textarea>
            <label for="instructionNL">InstructionNL:</label>
            <textarea class="bg-gray-200" name="instructionNL" type="text"></textarea>
            <label for="media">Media:</label>
            <input class="bg-gray-200"  name="media" type="text">

            <br>
            <x-button class="cursor-pointer bg-green-400 ">Create</x-button>

        </form>
        <div></div>
    </div>
@endsection
