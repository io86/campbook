@extends('layouts.app')
@section('content')
    <div class="container-fluid main-camping">
        <div class="row">
            <div class="d-none d-md-block col-md-3 col-xl-2 container-aside">
                <h2 class="mt-4 h2-choose-area">Choose area</h2>
                <aside class="pl-3 aside">
                    <ul class="pl-0 pt-2">

                        @foreach($countCampsArea as $k => $val)

                            <li><a href="/area/{{$k}}">{{$areas[$k]}}({{$val}})</a></li>

                        @endforeach

                    </ul>
                </aside>
            </div>
            <div class="col-12 col-md-9 pl-0 pr-0 container-info-camping">
                <div class="container-info-camping-interne">
                    <nav class="d-block sub-nav-camping">
                        <ul class="pl-0">
                            <li class="float-left text-center btn-description">Description</li>
                            <li class="float-right text-center btn-location">Location</li>
                        </ul>
                    </nav>
                    <div class="gallery-camping">
                        <div class="display-image">
                            @foreach($dataCamp as $value)
                            <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img1}}"  alt="Photo {{$value->name_en}}">
                            @endforeach
                        </div>
                        <div class="pt-4 container-thumbnails">

                            @foreach($dataCamp as $value)
                                @if($value->img1  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img1}}" alt="Photo {{$value->name_en}}">
                                     </div>
                                @endif
                                @if($value->img2  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img2}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img3  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img3}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img4  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img4}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img5  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img5}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img6  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img6}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img7  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img7}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img8  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img8}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img9  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img9}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img10  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img10}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img11  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img11}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img12  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img12}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img13  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img13}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img14  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img14}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img15  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img15}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                                @if($value->img16  !== '-')
                                    <div class="ml-2 thumbnail">
                                        <img src="/storage/photos-gallery/{{$value->id_user}}/{{$value->img16}}" alt="Photo {{$value->name_en}}">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-4 container-our-numbers">
                        <div class="row pl-1 pr-2 pb-4 pt-4 ml-auto mr-auto our-numbers">
                            <div class="col-12" style="border: 1px solid red;">
                            @foreach($dataCamp as $value)
                                @if($value->places != '-')
                                <div class="float-right container-places" style="border: 2px solid red;">
                                    <div class="ml-auto mr-auto rund-container-places">
                                        <i class="fas fa-campground"></i>
                                    </div>
                                    <p class="text-center">{{$value->places}}</p>
                                </div>
                                @endif
                                @if($value->area_sq != '-')
                                    <div class="float-right container-area" style="border: 2px solid red;">
                                        <div class="ml-auto mr-auto rund-container-area">
                                            <i class="far fa-square"></i>
                                        </div>
                                        <p class="text-center">{{$value->area_sq}}sq</p>
                                    </div>
                                @endif
                                @if($value->distance_sea != '-')
                                    <div class="float-right container-distance-sea" style="border: 2px solid red;">
                                        <div class="ml-auto mr-auto rund-container-distance-sea">
                                            <i class="fas fa-water"></i>
                                        </div>
                                        <p class="text-center">{{$value->distance_sea}}m</p>
                                    </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row m-0" style="border: 2px solid blue;">
                        <div class="col-12 col-sm-5 pl-1 pr-2 pb-4 pt-4 description" style="border: 2px solid green;">
                            <h3>Description</h3>
                            <div class="col-12" style="border: 1px solid red;">
                                @foreach($dataCamp as $value)
                                    @if($value->description_en === '-')
                                        <div class="col-12">
                                            <p>No description.</p>
                                        </div>
                                    @else
                                        <div class="col-12">
                                            <p>{{$value->description_en}}</p>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="d-none d-sm-block col-sm-1">
                        </div>
                        <div class="col-12 col-sm-6" style="border:1px solid red;">
                            <div class="col-12 pl-1 pr-2 pb-4 pt-4 our-facilities">
                                <h3>Our facilities</h3>
                                    @foreach($dataCamp as $value)
                                        @if($value->room != '-' && $value->room != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-bed"></i> Rooms:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->restaurant != '-' && $value->restaurant != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-utensils"></i> Restaurant:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->market != '-' && $value->market != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-shopping-basket"></i> Market:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->bar != '-' && $value->bar != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-glass-martini-alt"></i> Bar:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->cooking_facil != '-' && $value->cooking_facil != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-blender"></i> Cooking facilities:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->hanticapped_people != '-' && $value->hanticapped_people != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-wheelchair"></i> Toilettes for hanticapped people:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->wifi != '-' && $value->wifi != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-wifi"></i> Wifi:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->mobil_home != '-' && $value->mobil_home != '0')
                                            <div class="col-12 mt-2">
                                                Mobilhome:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->ironic_facil != '-' && $value->ironic_facil != '0')
                                            <div class="col-12 mt-2">
                                                Iron:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->pool != '-' && $value->pool != '0')
                                            <div class="col-12 mt-4">
                                                <i class="fas fa-swimming-pool"></i> Swimming pool:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->beach_volley != '-' && $value->beach_volley != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-volleyball-ball"></i> Beach volley:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->tennis != '-' && $value->tennis != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-utensils"></i> Tennis:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->football_5x5 != '-' && $value->football_5x5 != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-futbol"></i> Football 5x5:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->ping_pong != '-' && $value->ping_pong != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-table-tennis"></i> Ping pong:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                        @if($value->basket != '-' && $value->basket != '0')
                                            <div class="col-12 mt-2">
                                                <i class="fas fa-basketball-ball"></i> Basket:
                                                <i class="fas fa-check icon-check"></i>
                                            </div>
                                        @endif
                                    @endforeach
                            </div>
                            <div class="col-12 pl-1 pr-2 pb-4 pt-4 mt-4 ml-auto mr-auto cards">
                                <h3>Acceptable cards</h3>
                                @foreach($dataCamp as $value)
                                    @if($value->visa != '-' && $value->visa != '0')
                                        <div class="col-12 mt-2">
                                            <i class="fab fa-cc-visa"></i> Visa:
                                            <i class="fas fa-check icon-check"></i>
                                        </div>
                                    @endif
                                @endforeach
                                @foreach($dataCamp as $value)
                                    @if($value->master != '-' && $value->master != '0')
                                        <div class="col-12 mt-2">
                                            <i class="fab fa-cc-mastercard"></i> Master:
                                            <i class="fas fa-check icon-check"></i>
                                        </div>
                                    @endif
                                @endforeach
                                @foreach($dataCamp as $value)
                                    @if($value->other_card != '-' && $value->other_card != '0')
                                        <div class="col-12 mt-2">
                                            <i class="fas fa-credit-card"></i> Other card:
                                            <i class="fas fa-check icon-check"></i>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 pl-1 pr-2 pb-4 pt-4 contact-info" style="border: 2px solid green;">
                            <div class="container-contact-info">
                                @foreach($dataCamp as $value)
                                    @if($value->name_en != '-')
                                        <p>{{$value->name_en}}</p>
                                    @endif
                                    @if($value->address_en != '-')
                                        <p>{{$value->address_en}}</p>
                                    @endif
                                    @if($value->postcode != '-' && $value->city_en != '-')
                                        <p>{{$value->postcode}} {{$value->city_en}}</p>
                                    @endif
                                        @if($value->area_en != '-')
                                            <p>{{$value->area_en}}</p>
                                        @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

