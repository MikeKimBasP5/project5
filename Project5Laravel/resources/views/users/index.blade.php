@extends('layouts.main')
@section('title')
{{ __('users') }}
@endsection

@section('content')
<div class="container ">
<form method="get" class="text-center" action="{{route('users.create')}}">
        <x-button class="ml-3 bg-green-500 w-full justify-center">
            {{ __('Add') }}
        </x-button>
    </form>
    <br>
    
    <table class="text-left">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach ($users as $user)
        <tr onClick="document.location.href='{{route('users.show',[$user->id])}}'" class="hover:bg-blue-400 hover:cursor-pointer">
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <div class="inline-flex gap-1 mb-1">
                <form method="get" action="{{ route('users.edit', ['id' => $user->id]) }}">
                    <x-button class="ml-3 bg-blue-500 md:w-32 w-16 place-content-center">
                        {{ __('Wijzig') }}
                    </x-button>
                </form>
                <form method="post" action="{{route('users.destroy', ['id' => $user->id]) }}">
                    @method('delete')
                    @csrf
                    <x-button class="ml-3 bg-red-500 md:w-20 w-16 place-content-center">
                        {{ __('X') }}
                    </x-button>
                </form>
            </div>
        </td>
        </tr>
        @endforeach

    </table>
    
</div>
@endsection