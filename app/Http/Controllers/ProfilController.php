<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(int $idUser)
    {
        if (Auth::check()) {

            echo $idUser;
            return view('profil');
        }
    }
}
