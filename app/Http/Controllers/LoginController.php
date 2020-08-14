<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $input = $request->all();

        $inputData = array(
            'username' => $input['username'],
            'password' => $input['password']
        );

        if($this->authenticate($inputData['username'], $inputData['password']) === true){


            $idUser = $this->getIdUser($inputData['username'])['id_user'];
            $idRoleCamp = $this->getIdUser($inputData['username'])['id_role'];

            $request->session()->put('id-user', $idUser);

            if($idRoleCamp === 1) {

                return redirect('/dashboard/'.$idUser);  // Dashboard Camping

            }elseif($idRoleCamp === 2){

                return redirect('/profil/'.$idUser);  // Camper Profil
            }

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

    private function getIdUser(string $username): array
    {
        $data = DB::connection('mysqlAdmin')->table('users')
            ->join('roles', 'roles.id_role', '=', 'users.id_role')
            ->select('users.id_user', 'roles.id_role')
            ->where('username', $username)
            ->first();

        return (array) $data;
    }
}
