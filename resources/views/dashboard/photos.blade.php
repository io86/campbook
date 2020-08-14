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
                            @if($dataCamp->img1 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img1}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img2 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img2}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img3 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img3}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img4 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img4}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img5 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img5}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img6 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img6}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img7 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img7}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img8 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img8}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img9 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img9}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img10 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img10}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img11 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img11}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img12 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img12}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img13 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img13}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img14 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img14}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img15 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img15}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>
                        <div class="col-6 col-sm-4 p-2" style="border:1px solid red;">
                            @if($dataCamp->img16 === '-')
                                <img src="/storage/default-photos/tent.jpg" alt="Photo Findcamping" class="photo-camping">
                            @else
                                <img src="storage/app/users-photos/{{$dataCamp->id_user}}/{{$dataCamp->img16}}" alt="Photo {{$dataCamp->name_en}}" class="photo-camping">
                            @endif
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
