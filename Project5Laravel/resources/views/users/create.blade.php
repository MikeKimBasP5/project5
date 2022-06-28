@extends('layouts.main')
@section('title')
    {{ __('user') }}
@endsection

@section('content')
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center w-full">
        <div></div>
    <form method="POST" class=" w-2/5 grid grid-rows-1 place-content-center" action="{{ route('users.store') }}">
        @csrf
        <label for="name">Name</label>
        <input class="bg-gray-200"  name="name" type="text" required>
        <label for="email">E-mail</label>
        <input class="bg-gray-200"  name="email" type="text" required>
        <label for="password">Password</label>
        <input class="bg-gray-200"  name="password" type="text" required>
        <br>
        <x-button class="cursor-pointer bg-green-400 ">Create</x-button>
    </form>
        <div></div>
    </div>
@endsection
