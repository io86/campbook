<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Connection;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $input = $request->all();

        $inputData = [
            'username' => $input['username'],
            'password' => bcrypt($input['password']),
            'email' => $input['email'],
            'created_at' => now(),
            'updated_at' => now(),
            'id_role' => $input['user-role'],
        ];

        $existsUser = DB::connection('mysqlAdmin')->table('users')
            ->where('username', $inputData['username'])
            ->orWhere('email', $inputData['email'])
            ->first();

        if(!$existsUser){

            $error = 'Your can now login to your account.';
            $insertedIdUser = $this->storeUser($inputData);

            $inputDataContactInfo = [
                'email_camping' => '-',
                'website' => '-',
                'tel' => '-',
                'postcode' => '-',
                'id_user' => $insertedIdUser,
                'id_status' => 2,
                'id_areas' => 15
            ];

            $insertedContactInfoCamping = $this->storeContactInfoCamping($inputDataContactInfo);

            $inputDataCampingsEn = [
                'name_en' => '-',
                'address_en' => '-',
                'city_en' => '-',
                'id_contact_info_camping' => $insertedContactInfoCamping
            ];

            $inputDataCampingsGr = [
                'name_gr' => '-',
                'address_gr' => '-',
                'city_gr' => '-',
                'id_contact_info_camping' => $insertedContactInfoCamping
            ];

            $inputDataFacilities = [
                'distance_sea' => '-',
                'places' => '-',
                'area_sq' => '-',
                'room' => '-',
                'restaurant' => '-',
                'market' => '-',
                'bar' => '-',
                'cooking_facil' => '-',
                'ironic_facil' => '-',
                'hanticapped_people' => '-',
                'mobil_home' => '-',
                'wifi' => '-',
                'id_contact_info_camping' => $insertedContactInfoCamping
            ];

            $inputDataSportsFacilities = [
                'beach_volley' => '-',
                'tennis' => '-',
                'football_5x5' => '-',
                'ping_pong' => '-',
                'basket' => '-',
                'pool' => '-',
                'id_contact_info_camping' => $insertedContactInfoCamping
            ];

            $inputDataCards = [
                'visa' => '-',
                'master' => '-',
                'other_card' => '-',
                'id_contact_info_camping' => $insertedContactInfoCamping
            ];

            $inputDataPhotoProfiles = [
                'url_photo_profile' => '-',
                'id_user' => $insertedIdUser
            ];

            $inputDataPhotosCamping = [
                'img1' => '-',
                'img2' => '-',
                'img3' => '-',
                'img4' => '-',
                'img5' => '-',
                'img6' => '-',
                'img7' => '-',
                'img8' => '-',
                'img9' => '-',
                'img10' => '-',
                'img11' => '-',
                'img12' => '-',
                'img13' => '-',
                'img14' => '-',
                'img15' => '-',
                'img16' => '-',
                'id_contact_info_camping' => $insertedContactInfoCamping
            ];

            $inputDataDescriptions = [
                'description_en' => '-',
                'description_gr' => '-',
                'id_contact_info_camping' => $insertedContactInfoCamping
            ];

            $this->storeCampingsEn($inputDataCampingsEn);
            $this->storeCampingsGr($inputDataCampingsGr);
            $this->storeFacilities($inputDataFacilities);
            $this->storeSportsFacilities($inputDataSportsFacilities);
            $this->storeCards($inputDataCards);
            $this->storePhotoProfiles($inputDataPhotoProfiles);
            $this->storePhotosCamping($inputDataPhotosCamping);
            $this->storeDescriptions($inputDataDescriptions);

            return Redirect::back()->with('registerSuccess', $error);

        }else{

            $error = 'Username or Email already exists.';

            return Redirect::back()->with('registerUnsuccess', $error);
        }
    }

    private function storeUser(array $inputData): int
    {
        return DB::connection('mysqlAdmin')->table('users')
            ->insertGetId($inputData);
    }

    private function storeContactInfoCamping(array $inputDataContactInfo): int
    {
        return DB::connection('mysqlAdmin')->table('contact_info_campings')
            ->insertGetId($inputDataContactInfo);
    }

    private function storeCampingsEn(array $inputDataCampingsEn)
    {
        DB::connection('mysqlAdmin')->table('campings_en')
            ->insert($inputDataCampingsEn);
    }

    private function storeCampingsGr(array $inputDataCampingsGr)
    {
        DB::connection('mysqlAdmin')->table('campings_gr')
            ->insert($inputDataCampingsGr);
    }

    private function storeFacilities(array $inputDataFacilities)
    {
        DB::connection('mysqlAdmin')->table('facilities')
            ->insert($inputDataFacilities);
    }

    private function storeSportsFacilities(array $inputDataSportsFacilities)
    {
        DB::connection('mysqlAdmin')->table('sports_facilities')
            ->insert($inputDataSportsFacilities);
    }

    private function storeCards(array $inputDataCards)
    {
        DB::connection('mysqlAdmin')->table('cards')
            ->insert($inputDataCards);
    }

    private function storePhotoProfiles(array $inputDataPhotoProfiles)
    {
        DB::connection('mysqlAdmin')->table('photo_profiles')
            ->insert($inputDataPhotoProfiles);
    }

    private function storePhotosCamping(array $inputDataPhotosCamping)
    {
        DB::connection('mysqlAdmin')->table('photos_camping')
            ->insert($inputDataPhotosCamping);
    }

    private function storeDescriptions(array $inputDataDescriptions)
    {
        DB::connection('mysqlAdmin')->table('descriptions')
            ->insert($inputDataDescriptions);
    }
}
