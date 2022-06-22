@extends('layouts.main')
@section('title')
    {{ __('performance') }}
@endsection

@section('content')
    <div class="container items-center">
        @foreach($performances as $performance)

            <tr class="hover:bg-blue-400">

                <td ><a >{{$performance->id}}</a></td>
                <td><a >{{$performance->date}}</a></td>
                <td><a >{{$performance->startTime}}</a></td>
                <td><a >{{$performance->finishTime}}</a></td>


            </tr>

        @endforeach
    </div>
@endsection
