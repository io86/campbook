<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/area/{area}', 'AreaController@index');
Route::get('/camping/{id_camping}', 'CampingController@index');
Route::get('/profil', 'ProfilController@index')->middleware('auth');



Route::get('register', 'RegisterController@index');
Route::post('register','RegisterController@register');

Route::post('login', 'LoginController@login');

Route::get('logout', 'LogoutController@logout');

Route::get('profil/{idUser}', 'ProfilController@index');

Route::post('dashboard/{idUser}', 'DashboardController@update');
Route::get('dashboard/{idUser}', 'DashboardController@index');
Route::get('dashboard/{idUser}/contact-info', 'DashboardController@index');
Route::get('dashboard/{idUser}/camping-info', 'DashboardController@index');
Route::get('dashboard/{idUser}/facilities', 'DashboardController@index');
Route::get('dashboard/{idUser}/sports-facilities', 'DashboardController@index');
Route::get('dashboard/{idUser}/cards', 'DashboardController@index');
Route::get('dashboard/{idUser}/photos', 'DashboardController@index');

Route::get('admin', 'AdminController@index');

Route::post('adminpanel', 'AdminPanelController@login');
Route::get('adminpanel', 'AdminPanelController@index');
Route::get('adminpanel/new-campings', 'AdminPanelController@newcampings');
Route::get('adminpanel/confirmed-campings', 'AdminPanelController@confirmedcampings');
Route::get('adminpanel/rejected-campings', 'AdminPanelController@rejectedcampings');
Route::get('adminpanel/all-campings', 'AdminPanelController@allcampings');


/*Route::middleware('auth')->group(function () {
    Route::post('/profil', 'ProfilController@index');
});*/
