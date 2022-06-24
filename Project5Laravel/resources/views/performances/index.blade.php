@extends('layouts.main')
@section('title')
    {{ __('Performance') }}
@endsection

@section('content')
    <div class="container items-center">
        <table class="md:table-fixed w-full text-center overflow-x-auto" >


                {{--If the logged in user is an admin.--}}
        @if(Auth::check() && Auth::user()->hasRole("admin"))
                <tr>
                    <th>User</th>
                    <th>performance count</th>
                </tr>
            @foreach($users as $user)
            <tr onClick="document.location.href='{{route('performances.indexfunction',[$user->id])}}'" class="hover:bg-blue-400 hover:cursor-pointer">
                    <td>{{$user->name}}</td>

                <td>{{$performances->where('user_id',$user->id)->count()}}</td>
                </tr>

                @endforeach
</table>
        @else
        <tr>
        {{--If the logged in user is a normal user.--}}
        <th>Excercise</th>
        <th>date</th>
        <th>reps</th>
        <th>actions</th>
    </tr>
@foreach($performances as $performance)

    <tr onClick="document.location.href='{{route('performances.show',[$performance->id])}}'" class="hover:bg-blue-400 hover:cursor-pointer">

        {{--If the logged in user is a normal user.--}}
        <td >{{$performance->exercise['titleEN']}}</td>
        <td>{{$performance->date}}</td>
        <td>{{$performance->reps}}</td>
        <td>
        <div class="inline-flex gap-1 mb-1">
            <form  method="get">
                <x-button class="ml-3 bg-blue-500 w-30">
                    {{ __('Edit') }}
                </x-button>
            </form>
            <form method="post" action="{{ route('performances.destroy',$performance['id'])}}">
                @method('delete')
                @csrf
                <x-button class="ml-3 bg-red-500 w-30">
                    {{ __('X') }}
                </x-button>
            </form>
        </div>
        </td>
    </tr>

@endforeach


</table>
<form method="get" action="{{route('performances.create')}}" class="text-center">
    @csrf
    <x-button class="ml-3 bg-green-500 w-full justify-center">
        {{ __('Add') }}
    </x-button>
</form>
@endif
</div>


@endsection
