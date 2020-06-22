<?php

namespace App\Http\Controllers;

//use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        //$request->session()->forget('id-user');

        Auth::logout();



        return redirect('/');
    }
}
