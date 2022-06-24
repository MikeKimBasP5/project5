@extends('layouts.main')
@section('title')
    {{ __('Performance') }}
@endsection

@section('content')
{{-- "id" => 4
    "date" => "2022-06-23"
    "startTime" => "2022-06-23 21:33:00"
    "finishTime" => "2022-06-23 21:34:00"
    "reps" => 32
    "user_id" => 1
    "exercise_id" => 1
    "created_at" => "2022-06-23 19:30:03"
    "updated_at" => "2022-06-23 19:30:03"
    --}}
<div class="container items-center">
    <h1></h1>
    <table class="md:table-fixed w-full text-center" >
        <tr>
            <th>id</th>
            <th>Date</th>
            <th>Start time</th>
            <th>Finish time</th>
            <th>Reps</th>
            <th>User</th>
            <th>exercise En</th>
            <th>exercise NL</th>
        </tr>
@foreach($performances as $performance)
            <tr>
                <td>{{$performance->id}}</td>
                <td>{{$performance->date}}</td>
                <td>{{date('H:i:s', strtotime($performance->startTime))}}</td>
                <td>{{date('H:i:s', strtotime($performance->finishTime))}}</td>
                <td>{{$performance->reps}}</td>
                <td>{{$performance->user['name']}}</td>
                <td>{{$performance->exercise['titleEN']}}</td>
                <td>{{$performance->exercise['titleNL']}}</td>
            </tr>
@endforeach
    </table>
@endsection
