@extends('layouts.app')
@section('content')
<div class="container-fluid adminpanel-main" style="border:1px solid red;">
    <div class="row">
        <div class="pl-3 aside">
            <h3 class="mt-4">Your Campings</h3>
            <ul class="mt-4 pl-0">
                <li><a href="/adminpanel/new-campings">New Campings</a></li>
                <li><a href="/adminpanel/confirmed-campings">Confirmed Campings</a></li>
                <li><a href="/adminpanel/rejected-campings">Rejected Campings</a></li>
                <li><a href="/adminpanel/all-campings">All Campings</a></li>
            </ul>
        </div>


        <div class="pl-4 pt-4 main">
            <div class="mt-4 ml-4 container-new-campings-info">
                <h2>New Campings</h2>

                @foreach($dataCamps as $key => $dataCamp)
                    @if($dataCamp->username !== 'admin')
                    <div class="mt-4 pb-2 pl-4 pr-4 pt-4 interne-container-new-camping-info">

                        <div class="id-contact-info-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>ID</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->id_contact_info_camping}}</p>
                            </div>
                        </div>
                        <div class="username-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Username</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->username}}</p>
                            </div>
                        </div>
                        <div class="name-camp-en-account container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Camping Name</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->name_en}}</p>
                            </div>
                        </div>
                        <div class="name-camp-gr-account container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Όνομα Κάμπινγκ</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->name_gr}}</p>
                            </div>
                        </div>
                        <div class="address-en-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Address</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->address_en}}</p>
                            </div>
                        </div>
                        <div class="address-gr-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Διεύθυνση</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->address_gr}}</p>
                            </div>
                        </div>
                        <div class="postcode-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>TK</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->postcode}}</p>
                            </div>
                        </div>
                        <div class="city-en-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>City</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->city_en}}</p>
                            </div>
                        </div>
                        <div class="city-gr-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Πόλη</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->city_gr}}</p>
                            </div>
                        </div>
                        <div class="area-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Area</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->area_gr}}</p>
                            </div>
                        </div>
                        <div class="email-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Email</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->email_camping}}</p>
                            </div>
                        </div>
                        <div class="website-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Website</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->website}}</p>
                            </div>
                        </div>
                        <div class="tel-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Tel</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->tel}}</p>
                            </div>
                        </div>
                        <div class="distance-sea-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Distance sea</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->distance_sea}}</p>
                            </div>
                        </div>
                        <div class="places-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Places</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->places}}</p>
                            </div>
                        </div>
                        <div class="area-sq-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Area sq</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->area_sq}}</p>
                            </div>
                        </div>
                        <div class="room-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Room</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->room}}</p>
                            </div>
                        </div>
                        <div class="restaurant-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Restaurant</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->restaurant}}</p>
                            </div>
                        </div>
                        <div class="market-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Market</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->market}}</p>
                            </div>
                        </div>
                        <div class="bar-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Bar</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->bar}}</p>
                            </div>
                        </div>
                        <div class="cooking-facil-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Cooking Facilities</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->cooking_facil}}</p>
                            </div>
                        </div>
                        <div class="ironic-facil-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Ironic Facilities</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->ironic_facil}}</p>
                            </div>
                        </div>
                        <div class="hanticapped-people-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Hanticapped People</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->hanticapped_people}}</p>
                            </div>
                        </div>
                        <div class="mobil-home-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Mobil Home</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->mobil_home}}</p>
                            </div>
                        </div>
                        <div class="wifi-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Wifi</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->wifi}}</p>
                            </div>
                        </div>
                        <div class="beach-volley-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Beach Volley</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->beach_volley}}</p>
                            </div>
                        </div>
                        <div class="tennis-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Tennis</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->tennis}}</p>
                            </div>
                        </div>
                        <div class="football-5x5-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Football 5x5</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->football_5x5}}</p>
                            </div>
                        </div>
                        <div class="ping-pong-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Ping-Pong</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->ping_pong}}</p>
                            </div>
                        </div>
                        <div class="basket-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Basket</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->basket}}</p>
                            </div>
                        </div>
                        <div class="pool-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Pool</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->pool}}</p>
                            </div>
                        </div>
                        <div class="master-card-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Master Card</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->master}}</p>
                            </div>
                        </div>
                        <div class="visa-card-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Visa Card</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->visa}}</p>
                            </div>
                        </div>
                        <div class="other-card-camp container-info">
                            <div class="float-left pt-2 title-info">
                                <p>Other Cards</p>
                            </div>
                            <div class="float-right pt-2 content-info">
                                <p>{{$dataCamp->other_card}}</p>
                            </div>
                        </div>
                        <div class="descrtiption-en container-info container-info-description">
                            <div class="float-left pt-2 title-info">
                                <p class="p-title-edited-info">Description</p>
                            </div>
                            <div class="float-right pt-2 content-info content-info-description">
                                <p><span class="update-info">{{$dataCamp->description_en}}</span></p>
                            </div>
                        </div>
                        <div class="descrtiption-gr container-info container-info-description">
                            <div class="float-left pt-2 title-info">
                                <p class="p-title-edited-info">Περιγραφή</p>
                            </div>
                            <div class="float-right pt-2 content-info content-info-description">
                                <p><span class="update-info">{{$dataCamp->description_gr}}</span></p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>

        </div>

        {{--<div class="pl-4 pt-4 main">
            <div class="mt-4 ml-4 container-user-account-info">
                <h2>Account</h2>
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
        </div>--}}
    </div>
</div>
{{--<div class="modal fade modal-edit-info" id="modal-edit-info">
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
</div>--}}
@endsection
