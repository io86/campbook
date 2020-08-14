@extends('layouts.app')
@section('content')
<div class="container-fluid main-home">
    <div class="row div-bg-img">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 div-map-externe">
            <div class="ml-auto mr-auto div-map">
                <img src="/images/home/map.png" alt="Map of Greece" class="img-map">
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-0 div-choose-area">
            <div class="ml-auto mr-auto pt-4 pb-4 pl-4 pr-4 div-areas">
                <h2 class="mt-2 h2-choose-area">Choose area</h2>
                <ul class="pl-0 pt-2">

                @foreach($countCampsArea as $k => $val)
                    <li><a href="/area/{{$k}}">{{$areas[$k]}}({{$val}})</a></li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="ml-auto mr-auto div-search mt-4">
                <input type="search" name="search-camping" class="p-1 float-left">
                <div class="float-right pb-2 pt-2 pl-2 pr-2 div-search-btn">
                    <i class="fas fa-search mt-1 btn-search"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row ml-auto mr-auto div-last-updates">
        <div class="col-12">
            <h2 class="text-center">LAST UPDATES</h2>
        </div>

        @if(count($lastUpdates) === 0)

            <p class="ml-auto mr-auto">Cooming soon...</p>

        @else

            @foreach($lastUpdates as $key => $value)

            <div class="col-12 col-sm-6 col-lg-3 pt-4 pb-4" style="border:3px solid red;">
                <div class="ml-auto mr-auto container-camping-in-last-updates" style="border: 3px solid green;">
                    <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img1}}" alt="Photo {{$value->name_en}}" class="photo-camp-last-updates"/>
                </div>
                <div class="d-block text-center btn-camping-in-last-updates"><a href="/camping/{{$value->id_contact_info_camping}}">{{$value->name_en}}</a></div>
                </div>

            @endforeach
        @endif
    </div>
    <div class="row ml-auto mr-auto div-our-recommendations">
        <div class="col-12">
            <h2 class="text-center">OUR RECOMMENDATIONS</h2>
        </div>
        @if(count($recommendedCamps) === 0)

            <p class="ml-auto mr-auto">Cooming soon...</p>

        @else

            @foreach($recommendedCamps as $key => $value)

                <div class="col-12 col-sm-6 col-lg-3 pt-4 pb-4" style="border:3px solid red;">
                    <div class="ml-auto mr-auto container-camping-in-our-recommendations" style="border: 3px solid green;">
                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img1}}" alt="Photo {{$value->name_en}}" class="photo-camp-our-recommendations"/>
                    </div>
                    <div class="d-block text-center btn-camping-in-our-recommendations"><a href="/camping/{{$value->id_contact_info_camping}}">{{$value->name_en}}</a></div>
                </div>

            @endforeach
        @endif
    </div>
</div>
@endsection
