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
                <h2>Camping Info</h2>
                <div class="pb-2 pl-4 pr-4 pt-4 interne-container-contact-info">
                    <div class="name-en container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Name Camping</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->name_en}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="places container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Αρ. Θέσεων</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->places}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="area-sq container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Έκταση (σε τμ)</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->area_sq}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="distance-sea container-info">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Απόσταση από τη θάλασσα (σε m)</p>
                        </div>
                        <div class="float-right pt-2 content-info">
                            <p><span class="update-info">{{$dataCamp->distance_sea}}</span> <i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i></p>
                        </div>
                    </div>
                    <div class="descrition-gr container-info container-info-description">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Περιγραφή</p>
                        </div>
                        <div class="float-right pt-2 content-info content-info-description">
                            <p><i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i><br><span class="update-info">{{$dataCamp->description_gr}}</span></p>
                        </div>
                    </div>
                    <div class="descrtiption-en container-info container-info-description">
                        <div class="float-left pt-2 title-info">
                            <p class="p-title-edited-info">Description</p>
                        </div>
                        <div class="float-right pt-2 content-info content-info-description">
                            <p><i class="far fa-edit float-right btn-edit-info" data-toggle="modal" data-target="#modal-edit-info"></i><br><span class="update-info">{{$dataCamp->description_en}}</span></p>
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
                    <textarea id="update-description" name="update-info-description" class="update-description"></textarea>
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
