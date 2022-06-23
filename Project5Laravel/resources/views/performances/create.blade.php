@extends('layouts.main')
@section('title')
    {{ __('performance') }}
@endsection

@section('content')
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center w-full">
        <div></div>
    <form method="POST" class=" w-2/5 grid grid-rows-1 place-content-center" action="{{ route('performances.store') }}">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <label for="date">Date:</label>
        <input class="bg-gray-200" name="date" type="date">
        <label for="startTime">Start time:</label>
        <input class="bg-gray-200"  name="startTime" type="time">
        <label for="finishTime">Finish time::</label>
        <input class="bg-gray-200"  name="finishTime" type="time">
        <label for="reps">Reps:</label>
        <input class="bg-gray-200"  name="reps" type="number">
        <label for="exercise_id">Exercise:</label>
        <select name="exercise_id">
            <option disabled selected>Select your option</option>
            @foreach($exercises as $exercise)
                <option value="{{$exercise['id']}}">{{$exercise['titleEN']}}</option>
            @endforeach
        </select>
        <br>
        <x-button class="cursor-pointer bg-green-400 ">Create</x-button>

    </form>
        <div></div>
    </div>
@endsection
