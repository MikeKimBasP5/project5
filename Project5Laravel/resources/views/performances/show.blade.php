@extends('layouts.main')
@section('title')
    {{ __('performance') }}
@endsection

@section('content')
    @if(Auth::user()->id === (int)$performance->user_id || Auth::user()->hasRole('admin'))
        {{--If the logged in user is a admin--}}
        @if(Auth::user()->hasRole('admin'))
        <table class="text-left flex justify-center">
            <tr>
                <th>User details:</th>
                <th></th>
            </tr>
            <tr>
                <td>User id:</td>
                <td style="width: 15vw;"></td>
                <td>{{$performance->user['id']}}</td>
            </tr>
            <tr>
                <td>Name:</td>
                <td></td>
                <td>{{$performance->user['name']}}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td></td>
                <td>{{$performance->user['email']}}</td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <th>Performance:</th>
                <td></td>
            </tr>
            <tr>
                <td>Performance id:</td>
                <td></td>
                <td>{{$performance->id}}</td>
            </tr>
        </table>
        <br>
        @endif

        {{--What the normal user sees and the admin.--}}
        <table class="flex justify-center">
            <tr class="bg-lime-400">
                <td>Exercise name:</td> 
                <td style="width: 15vw;"></td>
                <td>{{$performance->exercise['titleEN']}}</td>
            </tr>
            <tr class="bg-lime-300">
                <td>Date of exercise:</td>
                <td></td>
                <td>{{$performance->date}}</td>
            </tr>
            <tr class="bg-lime-200">
                <td>Start time:</td>
                <td></td>
                <td>{{date('H:i:s', strtotime($performance->startTime))}}</td>
            </tr>
            <tr class="bg-lime-100">
                <td>Finish time:</td>
                <td></td>
                <td>{{date('H:i:s', strtotime($performance->finishTime))}}</td>
            </tr>
            <tr class="bg-lime-50">
                <td>Reps:</td>
                <td></td>
                <td>{{$performance->reps}}</td>
            </tr>
        </table>

        @else
            Not a valid link.
        @endif
@endsection
