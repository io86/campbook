<?php

namespace App\Http\Controllers;

use App\Attr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampingController extends Controller
{
    public function index($idCamp)
    {
        echo $idCamp;

        $attr = new Attr();
        $areas = $attr->getAreasEn();

        $countCampsProArea = [];
        foreach($areas as $k => $val){

            $keyDB = $attr->getAreasKeysDB()[$k];
            $countCampsProArea[$k] = $this->getNumberCampsProArea($keyDB);
        }

        $dataCamp = $this->getAllDataCamp($idCamp);

        print_r($dataCamp);


        return view('camping', [
            'countCampsArea' => $countCampsProArea,
            'areas' => $areas,
            'dataCamp' => $dataCamp
        ]);
    }

    private function getNumberCampsProArea(int $areaEnKeyDB)
    {
        $data = DB::connection('mysql')->table('contact_info_campings')
            ->where('id_areas', '=', $areaEnKeyDB)
            ->count();

        return $data;
    }

    private function getAllDataCamp(int $idCamp)
    {
        $data = DB::connection('mysql')->table('contact_info_campings')
            ->join('users', 'users.id_user', '=', 'contact_info_campings.id_user')
            ->join('campings_en', 'campings_en.id_contact_info_camping', 'contact_info_campings.id_contact_info_camping')
            ->join('facilities', 'facilities.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('sports_facilities', 'sports_facilities.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('descriptions', 'descriptions.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('cards', 'cards.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('photos_camping', 'photos_camping.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('areas', 'areas.id_areas', 'contact_info_campings.id_areas')
            ->select('users.id_user', 'contact_info_campings.*', 'photos_camping.*', 'campings_en.*', 'areas.*', 'cards.*', 'descriptions.*', 'sports_facilities.*', 'facilities.*')
            ->where([
                ['contact_info_campings.id_contact_info_camping', '=', $idCamp],
                ['contact_info_campings.id_status', '=', 1],
            ])
            ->orderByDesc('published_at')
            ->get();

        return $data;
    }
}
