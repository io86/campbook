<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminPanelController extends Controller
{
    public function index()
    {
        /*echo session('admin');

        if(session('admin') === 'active'){

            $dataNewCamps = $this->getDataNewCamps();

            print_r($dataNewCamps);

            echo gettype($dataNewCamps);

            return view('admin-panel', ['dataNewCamps' => $dataNewCamps]);

        }*/

        if(session('admin') !== 'active'){

            return redirect()->back();

        }else {

            $dataNewCamps = $this->getDataNewCamps();

            print_r($dataNewCamps);

            return view('admin-panel', ['dataNewCamps' => $dataNewCamps]);

        }



    }

    public function login(Request $request)
    {
        $input = $request->all();

        $inputData = array(
            'username' => $input['username'],
            'password' => $input['password']
        );

        if($this->authenticate($inputData['username'], $inputData['password']) === true) {

            $request->session()->put('admin', 'active');

            $dataNewCamps = $this->getDataNewCamps();

            return view('admin-panel', ['dataNewCamps' => $dataNewCamps]);






        }else{

            return redirect()->back();
        }
    }

    private function authenticate(string $username, string $password): bool
    {
        if(Auth::attempt(['username' => $username, 'password' => $password])){

            return true;

        }else{

            return false;
        }
    }

    public function newcampings()
    {
        if(session('admin') !== 'active'){

            return redirect()->back();

        }else {

            $dataNewCamps = $this->getDataNewCamps();

            print_r($dataNewCamps);

            return view('admin-panel', ['dataCamps' => $dataNewCamps]);

        }
    }

    public function confirmedcampings()
    {
        if(session('admin') !== 'active'){

            return redirect()->back();

        }else {

            $dataConfirmedCamps = $this->getDataConfirmedCamps();

            return view('admin-panel', ['dataCamps' => $dataConfirmedCamps]);

        }
    }

    public function rejectedcampings()
    {
        return view('admin-panel');
    }

    public function allcampings()
    {
        return view('admin-panel');
    }

    private function getDataNewCamps()
    {
        $data = DB::connection('mysqlAdmin')->table('contact_info_campings')
            ->join('users', 'users.id_user', '=', 'contact_info_campings.id_user')
            ->join('campings_en', 'campings_en.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('campings_gr', 'campings_gr.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('facilities', 'facilities.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('sports_facilities', 'sports_facilities.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('descriptions', 'descriptions.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('cards', 'cards.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('photos_camping', 'photos_camping.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('areas', 'areas.id_areas', 'contact_info_campings.id_areas')
            ->select('users.id_user', 'users.username', 'contact_info_campings.*', 'photos_camping.*', 'campings_en.*', 'campings_gr.*', 'areas.*', 'cards.*', 'descriptions.*', 'sports_facilities.*', 'facilities.*')
            ->where('contact_info_campings.id_status', '=', 2)
            ->orderByDesc('published_at')
            ->get();

        print_r($data);

        return $data;
    }

    private function getDataConfirmedCamps()
    {
        $data = DB::connection('mysqlAdmin')->table('contact_info_campings')
            ->join('users', 'users.id_user', '=', 'contact_info_campings.id_user')
            ->join('campings_en', 'campings_en.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('campings_gr', 'campings_gr.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('facilities', 'facilities.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('sports_facilities', 'sports_facilities.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('descriptions', 'descriptions.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('cards', 'cards.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('photos_camping', 'photos_camping.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('areas', 'areas.id_areas', 'contact_info_campings.id_areas')
            ->select('users.id_user', 'users.username', 'contact_info_campings.*', 'photos_camping.*', 'campings_en.*', 'campings_gr.*', 'areas.*', 'cards.*', 'descriptions.*', 'sports_facilities.*', 'facilities.*')
            ->where('contact_info_campings.id_status', '=', 1)
            ->orderByDesc('published_at')
            ->get();

        print_r($data);

        return $data;
    }
}
