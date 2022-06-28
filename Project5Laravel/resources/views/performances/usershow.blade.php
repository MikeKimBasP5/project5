@extends('layouts.main')
@section('title')
    {{ __('Performance') }}
@endsection

@section('content')

<div class="container items-center">
    <h1></h1>
    <table class="sm: text-sm md:table-fixed w-full text-center" >
    @foreach($performances as $performance)
    <tr class="border">
        <tr>
            <td><br></td>
        </tr>  
        <tr>
            <th>id</th>
            <td>{{$performance->id}}</td>
            <td>&nbsp;</td>
            <th>Start time</th>
            <td>{{date('H:i:s', strtotime($performance->startTime))}}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{$performance->date}}</td>
            <td></td>
            <th>Finish time</th>
            <td>{{date('H:i:s', strtotime($performance->finishTime))}}</td>
        </tr>
        <tr>
            <th>Reps</th>
            <td>{{$performance->reps}}</td>
            <td></td>
            <th>User</th>
            <td>{{$performance->user['name']}}</td>
        </tr>
        <tr>
            <th>exercise En</th>
            <td>{{$performance->exercise['titleEN']}}</td>
            <td></td>
            <th>exercise NL</th>
            <td>{{$performance->exercise['titleNL']}}</td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
    </tr>
    @endforeach
    </table>
@endsection
</div>

