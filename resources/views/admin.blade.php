@extends('layouts.app')
@section('content')
<div class="container-fluid main-admin">
    <div class="ml-auto mr-auto container-admin-form">
        <form action="/adminpanel" method="post" class="admin-form p-4">
            @csrf
            <label for="username" class="label-username">Username</label>
            <input type="text" name="username" id="username" class="p-2">
            <label for="password" class="label-password">Password</label>
            <input type="password" name="password" id="password" class="p-2">
            <input type="submit" name="login" value="Login" class="float-right p-2 btn-login">
        </form>
    </div>
</div>
@endsection
