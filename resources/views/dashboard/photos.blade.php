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
        <div class="main">
            <div class="pt-4">
                <h2 class="ml-4">Your Photos</h2>
                <div class="pt-4 container-photos-camp">
                    <div class="row m-0" style="border:1px solid yellow;">
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            {{--@if($dataCamp->img1 === '-')
                                <img src="" alt="Photo Findcamping">
                            @else
                                <img src="" alt="Photo Findcamping">
                            @endif--}}
                        </div>
                        <div class="col-6 col-sm-4" style="border:1px solid red;">
                            fghnjgdfh
                        </div>
                        <div class="col-6 col-sm-4" style="border:1px solid red;">
                            fghnjgdfh
                        </div>
                        <div class="col-6 col-sm-4" style="border:1px solid red;">
                            fghnjgdfh
                        </div>
                        <div class="col-6 col-sm-4" style="border:1px solid red;">
                            fghnjgdfh
                        </div>
                        <div class="col-6 col-sm-4" style="border:1px solid red;">
                            fghnjgdfh
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
