@extends('layouts.main')
@section('title')
    {{ __('performance') }}
@endsection

@section('content')
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center w-full">
        <div></div>
        <form method="POST" class=" w-2/5 grid grid-rows-1 place-content-center" action="{{ route('performances.update',['id' => $performance->id])  }}">
            @csrf
@method('put')
            <label for="date">Date:</label>
            <input class="bg-gray-200" name="date" value="{{$performance->date}}" type="date">
            <label for="startTime">Start time:</label>
            <input class="bg-gray-200"  name="startTime" value="{{$performance->startTime}}" type="datetime-local">
            <label for="finishTime">Finish time::</label>
            <input class="bg-gray-200"  name="finishTime" value="{{$performance->finishTime}}" type="datetime-local">
            <label for="reps">Reps:</label>
            <input class="bg-gray-200"  name="reps" type="number" value="{{$performance->reps}}">

            <br>
            <x-button class="cursor-pointer bg-green-400 ">edit</x-button>

        </form>
        <div></div>
    </div>
@endsection
