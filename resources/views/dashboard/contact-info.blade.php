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
                <h2>Contact Info</h2>
                <div class="pb-2 pl-4 pr-4 pt-4 interne-container-contact-info">
                    <div class="email-camping container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Email Camping</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->email_camping}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="website container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Website</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->website}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="address-en container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Address</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->address_en}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="address-gr container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Διεύθυνση</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->address_gr}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="city-en container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">City / Island</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->city_en}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="city_gr container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Πόλη / Νησί</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->city_gr}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="postcode container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">ΤΚ</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->postcode}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="area-gr container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Περιοχή</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->area_gr}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="area-gr container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Τηλέφωνο</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->tel}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
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
                    <input type="text" name="update-info" value="" id="update-info">
                    <select name="update-area" id="update-area">
                        <option value="1">Νησιά Β. Αιγαίου</option>
                        <option value="2">Αττική</option>
                        <option value="3">Κεντρική Ελλάδα</option>
                        <option value="4">Κυκλάδες</option>
                        <option value="5">Δωδεκάνησα</option>
                        <option value="6">Ιόνια Νησιά</option>
                        <option value="7">Μακεδονία</option>
                        <option value="8">Πελοπόννησος</option>
                        <option value="9">Σποράδες</option>
                        <option value="10">Θεσσαλία</option>
                        <option value="11">Θράκη</option>
                        <option value="12">Κρήτη</option>
                        <option value="13">Ήπειρος</option>
                    </select>
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
