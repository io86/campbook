@extends('layouts.app')
@section('content')
<div class="container-fluid dashboard-main" style="border:1px solid red;">
    <div class="row">
        <div class="pl-4 aside">
            <h3 class="mt-4">Your Profil</h3>
            <ul class="mt-4 pl-4">
                <li><a href="/dashboard/{{$dataCamp->id_user}}">Account</a></li>
                <li><a href="/dashboard/{{$dataCamp->id_user}}/contact-info">Contact Info</a></li>
                <li><a href="/dashboard/{{$dataCamp->id_user}}/camping-info">Camping Info</a></li>
                <li><a href="/dashboard/{{$dataCamp->id_user}}/facilities">Facilities</a></li>
                <li><a href="/dashboard/{{$dataCamp->id_user}}/sports-facilities">Sports Facilities</a></li>
                <li><a href="/dashboard/{{$dataCamp->id_user}}/cards">Acceptable Cards</a></li>
                <li><a href="/dashboard/{{$dataCamp->id_user}}/photos">Photos</a></li>
            </ul>
        </div>
        <div class="pl-4 pt-4 main">
            <div class="mt-4 ml-4 container-user-account-info">
                <h2>Account</h2>
                @if(\Session::has('errorUpdatePassword'))
                    <p class="msg-update-password {{\Session::get('errorUpdatePassword')['colorClass']}}">{{ \Session::get('errorUpdatePassword')['msgUpdatePassword'] }}</p>
                @endif
                <div class="pb-2 pl-4 pr-4 pt-4 interne-container-user-account-info">
                    <div class="id-account container-info">
                        <div class="float-left pt-2 title-info">
                            <p>ID</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p>{{$dataCamp->id_user}}</p>
                        </div>
                    </div>
                    <div class="username-account container-info">
                        <div class="float-left pt-2 title-info">
                            <p>Username</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p>{{$dataCamp->username}}</p>
                        </div>
                    </div>
                    <div class="email-account container-info">
                        <div class="float-left pt-2 title-info">
                            <p>Email</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p>{{$dataCamp->email}}</p>
                        </div>
                    </div>
                    <div class="password-account container-info">
                        <div class="float-left pt-2 title-info">
                            <p>Password</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p>******* <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                            <input type="hidden" value="{{$dataCamp->password}}">
                        </div>
                    </div>
                    <div class="role-account container-info">
                        <div class="float-left pt-2 title-info">
                            <p>Role</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p>{{ucfirst($dataCamp->role)}}</p>
                        </div>
                    </div>
                    <div class="created-at-account container-info">
                        <div class="float-left pt-2 title-info">
                            <p>Created at</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p>{{$dataCamp->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-edit-info" id="modal-edit-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Password</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/{{$dataCamp->id_user}}" method="post" class="form-in-modal-edit-info">
                    @csrf
                    <label for="current-password">Password</label>
                    <input type="password" name="current-password" value="" id="current-password">
                    <label class="mt-4" for="new-password">New Password</label>
                    <input type="password" name="new-password" value="" id="new-password">
                    <input type="submit" value="Submit" name="update-password" class="mt-4 btn btn-success btn-update-password">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
