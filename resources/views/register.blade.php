@extends('layouts.app')
@section('content')
<div class="container-fluid main-register">
    <div class="ml-auto mr-auto container-register-form">
        <form action="/register" method="post" class="register-form p-4">
            @csrf
            <div class="float-left pt-2 mb-4">
                <label for="owner">Owner</label><br>
                <input type="radio" name="user-role" value="1" id="owner">
            </div>
            <div class="float-right pt-2 mb-4">
                <label for="camper">Camper</label><br>
                <input type="radio" name="user-role" value="2" id="camper">
            </div>
            <label for="username" class="label-username">Username</label>
            <input type="text" name="username" id="username" class="p-2">
            <label for="password" class="label-password">Password</label>
            <input type="password" name="password" id="password" class="p-2">
            <label for="email" class="label-email">Email</label>
            <input type="text" name="email" id="email" class="p-2">
            <input type="submit" name="register" value="Register" class="float-right p-2 btn-register">
            @if(\Session::has('registerSuccess'))
                {{ \Session::get('registerSuccess') }}

            @elseif(\Session::has('registerUnsuccess'))
                {{ \Session::get('registerUnsuccess') }}
            @endif
        </form>
    </div>
</div>
@endsection
