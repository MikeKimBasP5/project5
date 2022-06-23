@extends('layouts.main')
@section('title')
    {{ __('performance') }}
@endsection

@section('content')
    @if(Auth::user()->id === (int)$performance->user_id || Auth::user()->hasRole('admin'))
        {{--If the logged in user is a admin--}}
        @if(Auth::user()->hasRole('admin'))
            <h1 class="text-2xl">User details:</h1>
            <p>User id: {{$performance->user['id']}}</p>
            <p>Name:{{$performance->user['name']}}</p>
            <p>Email: {{$performance->user['email']}}</p>
            <h1 class="text-2xl">Performance</h1>
            <p>Perfromance id: {{$performance->id}}</p>
        @endif
{{--What the normal user sees and the admin.--}}
<p>Exercise name: {{$performance->exercise['titleEN']}}</p>
<p>Date of exercise: {{$performance->date}}</p>
<p>Start time: {{date('H:i:s', strtotime($performance->startTime))}}</p>
<p>Finish time: {{date('H:i:s', strtotime($performance->finishTime))}}</p>
<p>Reps: {{$performance->reps}}</p>


    @else
        Not a valid link.
@endif
@endsection
