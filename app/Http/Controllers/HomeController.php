<?php

namespace App\Http\Controllers;

use App\Attr;
use App\CampingsEn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
        $attr = new Attr();
        $areas = $attr->getAreasEn();

        $countCampsProArea = [];
        foreach($areas as $k => $val){

            $keyDB = $attr->getAreasKeysDB()[$k];
            $countCampsProArea[$k] = $this->getNumberCampsProArea($keyDB);
        }

        $lastUpdatedCamps = $this->getLastUpdates();

        if(count($this->getAllActiveCamps()) >= 2) {  /// NA GINEI APO 2 SE 4

            $recommendedCamps = $this->getRecommended();

        }else{

            $recommendedCamps = [];
        }

        return view('home', [
            'countCampsArea' => $countCampsProArea,
            'areas' => $areas,
            'lastUpdates' => $lastUpdatedCamps,
            'recommendedCamps' => $recommendedCamps
        ]);
    }

    private function getNumberCampsProArea(int $areaEnKeyDB)
    {
        $data = DB::connection('mysql')->table('contact_info_campings')
            ->where('id_areas', '=', $areaEnKeyDB)
            ->count();

        return $data;
    }

    private function getLastUpdates()
    {
        $data = DB::connection('mysql')->table('contact_info_campings')
            ->join('users', 'users.id_user', '=', 'contact_info_campings.id_user')
            ->join('photos_camping', 'photos_camping.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('campings_en', 'campings_en.id_contact_info_camping', 'contact_info_campings.id_contact_info_camping')
            ->select('users.id_user', 'contact_info_campings.id_contact_info_camping', 'photos_camping.img1', 'campings_en.name_en')
            ->where('contact_info_campings.id_status', '=', 1)
            ->orderByDesc('published_at')
            ->limit(4)->get();

        return $data;
    }

    private function getRecommended()
    {
        $data = DB::connection('mysql')->table('contact_info_campings')
            ->join('users', 'users.id_user', '=', 'contact_info_campings.id_user')
            ->join('photos_camping', 'photos_camping.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('campings_en', 'campings_en.id_contact_info_camping', 'contact_info_campings.id_contact_info_camping')
            ->select('users.id_user', 'contact_info_campings.id_contact_info_camping', 'photos_camping.img1', 'campings_en.name_en')
            ->where('contact_info_campings.id_status', '=', '6')
            ->get()->random(2);

        return $data;
    }

    private function getAllActiveCamps()
    {
        $data = DB::connection('mysql')->table('contact_info_campings')
            ->join('users', 'users.id_user', '=', 'contact_info_campings.id_user')
            ->join('photos_camping', 'photos_camping.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('campings_en', 'campings_en.id_contact_info_camping', 'contact_info_campings.id_contact_info_camping')
            ->select('users.id_user', 'contact_info_campings.id_contact_info_camping', 'photos_camping.img1', 'campings_en.name_en')
            ->where('contact_info_campings.id_status', '=', '6')
            ->get();

        return $data;
    }
}
