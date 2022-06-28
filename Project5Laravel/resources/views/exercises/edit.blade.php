@extends('layouts.main')
@section('title')
    {{ __('performance') }}
@endsection

@section('content')
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center w-full">
        <div></div>
        <form method="POST" class=" w-2/5 grid grid-rows-1 place-content-center" action="{{ route('exercises.update', ['id' => $exercise->id]) }}">
            @method('PUT')
            @csrf
            <input class="bg-gray-200" name="titleEN" type="text" value="{{$exercise->titleEN}}">

            <input class="bg-gray-200" name="titleNL" type="text" value="{{$exercise->titleNL}}">
      
            <textarea class="bg-gray-200" name="instructionEN" type="text">{{$exercise->instructionEN}}</textarea>

            <textarea class="bg-gray-200" name="instructionNL" type="text">{{$exercise->instructionNL}}</textarea>

            <input class="bg-gray-200"  name="media" type="url" value="{{$exercise->media}}">

            <br>
            <x-button class="cursor-pointer bg-green-400 ">Edit</x-button>

        </form>
        <div></div>
    </div>
@endsection