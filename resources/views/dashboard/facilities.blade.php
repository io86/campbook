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
            <div class="mt-4 ml-4 container-contact-info">
                <h2>Facilities</h2>
                <div class="pb-2 pl-4 pr-4 pt-4 interne-container-contact-info">
                    <div class="rooms container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Δωμάτια</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">
                                @if($dataCamp->room === '1')
                                    Ναι
                                @elseif($dataCamp->room === '0')
                                    Όχι
                                @else
                                    {{$dataCamp->room}}
                                @endif
                                </span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="restaurant container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Εστιατόριο</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">
                                @if($dataCamp->restaurant === '1')
                                    Ναι
                                @elseif($dataCamp->restaurant === '0')
                                    Όχι
                                @else
                                    {{$dataCamp->restaurant}}
                                @endif
                                </span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="market container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Market</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">
                                @if($dataCamp->market === '1')
                                    Ναι
                                @elseif($dataCamp->market === '0')
                                    Όχι
                                @else
                                    {{$dataCamp->market}}
                                @endif
                                </span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="bar container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Bar</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">
                                @if($dataCamp->bar === '1')
                                    Ναι
                                @elseif($dataCamp->bar === '0')
                                    Όχι
                                @else
                                    {{$dataCamp->bar}}
                                @endif
                                </span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="cooking-facil container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Κοινόχρηστη Κουζίνα</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">
                                @if($dataCamp->cooking_facil === '1')
                                    Ναι
                                @elseif($dataCamp->cooking_facil === '0')
                                    Όχι
                                @else
                                    {{$dataCamp->cooking_facil}}
                                @endif
                                </span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div><div class="ironic-facil container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Κοινόχρηστο Σίδερο</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">
                                @if($dataCamp->ironic_facil === '1')
                                        Ναι
                                @elseif($dataCamp->ironic_facil === '0')
                                    Όχι
                                @else
                                        {{$dataCamp->ironic_facil}}
                                @endif
                                </span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="mobil-home container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Τροχόσπιτα</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">
                                @if($dataCamp->mobil_home === '1')
                                    Ναι
                                @elseif($dataCamp->mobil_home === '0')
                                    Όχι
                                @else
                                    {{$dataCamp->mobil_home}}
                                @endif
                                </span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="hanticapped-people container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Τουαλέτες για άτομα με ειδ. ανάγκες</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">
                                @if($dataCamp->hanticapped_people === '1')
                                    Ναι
                                @elseif($dataCamp->hanticapped_people === '0')
                                    Όχι
                                @else
                                    {{$dataCamp->hanticapped_people}}
                                @endif
                                </span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
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
                <h4 class="modal-title">Update Info</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/{{$dataCamp->id_user}}" method="post" class="form-in-modal-edit-info">
                    @csrf
                    <label for="update-info" class="label-updated-info"></label>
                    <input type="radio" name="update-info" value="1" class="radio-btn">Ναι
                    <input type="radio" name="update-info" value="0" class="radio-btn">Όχι
                    <input type="submit" value="Update" name="submit-update-info" class="mt-4 btn btn-success btn-update-info">
                    <input type="hidden" name="hidden-table" value="">
                    <input type="hidden" name="hidden-updated-col" value="">
                    <input type="hidden" name="hidden-key-col" value="id_contact_info_camping">
                    <input type="hidden" name="hidden-key-value" value="{{$dataCamp->id_contact_info_camping}}">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
