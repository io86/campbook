<?php

namespace App\Http\Controllers;

use App\CampingsEn;
use App\CampingsEnAdmin;
use App\CampingsGrAdmin;
use App\Cards;
use App\CardsAdmin;
use App\ContactInfoCamping;
use App\ContactInfoCampingAdmin;
use App\Descriptions;
use App\DescriptionsAdmin;
use App\FacilitiesAdmin;
use App\SportsFacilitiesAdmin;
use App\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {

            $idUser = session('id-user');
            $curUrl = $request->path();

            switch ($curUrl) {

                case 'dashboard/'.$idUser.'/contact-info':

                    $template = $this->getContactInfoTemplate();
                    break;

                case 'dashboard/'.$idUser.'/camping-info':

                    $template = $this->getCampingInfoTemplate();
                    break;

                case 'dashboard/'.$idUser.'/facilities':

                    $template = $this->getFacilitiesTemplate();
                    break;

                case 'dashboard/'.$idUser.'/sports-facilities':

                    $template = $this->getSportsFacilitiesTemplate();
                    break;

                case 'dashboard/'.$idUser.'/cards':

                    $template = $this->getCardsTemplate();
                    break;

                case 'dashboard/'.$idUser.'/photos':

                    $template = $this->getPhotosTemplate();
                    break;

                default:

                    $template = $this->getAccountTemplate();
                    break;
            }

            $dataCamping = $this->getAllDataCamp($idUser);

            $campImgs = [];

            echo $idUser;

            for($i = 1; $i < 17; $i++){

                $img = 'img'.$i;
                echo '<br>'.$dataCamping->$img."<br>";

                $campImgs['img'.$i] = $dataCamping->$img;
                //array_push($campImgs, $dataCamping->$img);

                if($img !== '-'){

                    $pathImage = '/storage/app/users-photos/'.$idUser.'/img'.$i;

                    if(file_exists($pathImage)){

                        echo 'path exists';

                    }else{

                        echo 'path doesnt exists';
                    }
                }
            }
            echo "<hr>";

            print_r($campImgs);
            echo "<hr>";
            print_r($dataCamping);


            return view($template, ['dataCamp' => $dataCamping]);

        }else{

            return redirect('/');
        }
    }

    public function update(Request $request)
    {
        if (Auth::check()) {

            $idUser = session('id-user');

            if(isset($_POST['update-password'])) {

                $curPasswort = $request['current-password'];
                $newPasswort = $request['new-password'];
                $actuallPassword = $this->getActualPassword($idUser);

                if (Hash::check($curPasswort, $actuallPassword)) {

                    $newPasswort = bcrypt($newPasswort);
                    $this->updatePassword($idUser, $newPasswort);

                    $msgUpdatePassword = 'Your Password has been successfully changed.';
                    $colorFont = 'color-green';

                } else {

                    $msgUpdatePassword = 'You have given a false password. Please try again.';
                    $colorFont = 'color-red';
                }

                return Redirect::back()->with('errorUpdatePassword', [
                    'msgUpdatePassword' => $msgUpdatePassword, 'colorClass' => $colorFont
                ]);

            }elseif(isset($_POST['submit-update-info'])) {

                $table = $_POST['hidden-table'];
                $keyCol = $_POST['hidden-key-col'];
                $idContactInfoCamping = $_POST['hidden-key-value'];
                $value = $_POST['update-info'];
                $updatedCol = $_POST['hidden-updated-col'];

                if(isset($_POST['update-info-description'])) {

                    $description = $_POST['update-info-description'];

                    if($description !== ''){

                        $value = $description;
                    }
                }

                if($updatedCol === 'area_gr'){

                    $value = (int) $_POST['update-area'];
                    $updatedCol = 'id_areas';
                }

                $this->updateInfo($table, $idContactInfoCamping, $updatedCol, $value);
                // Update Status as "inactive"
                $this->updateStatus(2, $idContactInfoCamping);

                return Redirect::back();
            }

        }else{

            return redirect('/');
        }
    }

    private function getAllDataCamp(int $idUser)
    {
        $data = DB::connection('mysqlAdmin')->table('users')
            ->join('roles', 'roles.id_role', '=', 'users.id_role')
            ->join('contact_info_campings', 'contact_info_campings.id_user', '=', 'users.id_user')
            ->join('campings_en', 'campings_en.id_contact_info_camping', '=','contact_info_campings.id_contact_info_camping')
            ->join('campings_gr', 'campings_gr.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('facilities', 'facilities.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('sports_facilities', 'sports_facilities.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('descriptions', 'descriptions.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('cards', 'cards.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('photos_camping', 'photos_camping.id_contact_info_camping', '=', 'contact_info_campings.id_contact_info_camping')
            ->join('areas', 'areas.id_areas', 'contact_info_campings.id_areas')
            ->select('users.*', 'roles.*', 'contact_info_campings.*', 'photos_camping.*', 'campings_en.*', 'campings_gr.*', 'areas.*', 'cards.*', 'descriptions.*', 'sports_facilities.*', 'facilities.*')
            ->where('users.id_user', $idUser)
            ->first();

        return $data;
    }

    private function getDataContactInfoCamping(int $idUser)
    {
        $data = DB::connection('mysqlAdmin')->table('contact_info_campings')
            ->select('*')
            ->where('users.id_user', $idUser)
            ->first();

        return $data;
    }

    private function getAccountTemplate(): string
    {
        return 'dashboard/account';
    }

    private function getContactInfoTemplate(): string
    {
        return 'dashboard/contact-info';
    }

    private function getCampingInfoTemplate(): string
    {
        return 'dashboard/camping-info';
    }

    private function getFacilitiesTemplate(): string
    {
        return 'dashboard/facilities';
    }

    private function getSportsFacilitiesTemplate(): string
    {
        return 'dashboard/sports-facilities';
    }

    private function getCardsTemplate(): string
    {
        return 'dashboard/cards';
    }

    private function getPhotosTemplate(): string
    {
        return 'dashboard/photos';
    }

    private function getActualPassword(int $idUser): string
    {
        $data = DB::connection('mysqlAdmin')->table('users')
            ->select('password')
            ->where('id_user', $idUser)
            ->first();

        return $data->password;
    }

    private function updatePassword(int $idUser, string $password)
    {
        $user = UserAdmin::find($idUser);
        $user->password = $password;
        $user->save();

    }

    private function updateInfo(string $table, int $idContactInfoCamping, string $updatedCol, string $value)
    {
        $data = DB::connection('mysqlAdmin')->table($table)
            ->where('id_contact_info_camping', $idContactInfoCamping)
            ->update([$updatedCol => $value]);

    }

    private function updateStatus(int $value, int $idContactInfoCamping)
    {
        $data = DB::connection('mysqlAdmin')->table('contact_info_campings')
            ->where('id_contact_info_camping', $idContactInfoCamping)
            ->update(['id_status' => $value]);

    }

    /*private function statusToBeUpdated(int $idContactInfoCamping)
    {
        $data = DB::connection('mysqlAdmin')->table('contact_info_campings')
            ->where('id_contact_info_camping', $idContactInfoCamping)
            ->update(['id_status' => 4]);

    }*/
}
