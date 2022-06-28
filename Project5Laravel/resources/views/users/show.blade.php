@extends('layouts.main')
@section('title')
{{ __('user') }}
@endsection

@section('content')
<div class="container ">
    <table class="text-left">
        <tr>
            <th>User details:</th>
            <th></th>
        </tr>
        <tr>
            <td>User id:</td>
            <td style="width: 15vw;"></td>
            <td>{{$user['id']}}</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td></td>
            <td>{{$user['name']}}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td></td>
            <td>{{$user['email']}}</td>
        </tr>
        <tr>
            <td>Email verified:</td>
            <td></td>
            <td>{{$user['email_verified_at']}}</td>
        </tr>
        <tr>
            <td>Role Id:</td>
            <td></td>
            <td>{{$user['role_id']}}</td>
        </tr>
        <tr>
            <td>Remember token:</td>
            <td></td>
            <td>{{$user['remember_token']}}</td>
        </tr>
        <tr>
            <td>Created at:</td>
            <td></td>
            <td>{{$user['created_at']}}</td>
        </tr>
        <tr>
            <td>Updated at:</td>
            <td></td>
            <td>{{$user['updated_at']}}</td>
        </tr>
    </table>
</div>
@endsection