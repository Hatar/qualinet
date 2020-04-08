<?php

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

Route::get('/', function () {
    return view('welcome');
});


//Route About
Route::get('/somme-nous','AboutController@index');
Route::get('/mission','AboutController@mission');
Route::get('/defference','AboutController@defference');
Route::get('/egagement','AboutController@egagement');

//Route Services
Route::get('/Secteur_residentiel','ServicesController@residentiel');
Route::get('/Secteurs_industriel_commercial','ServicesController@commercial');
Route::get('/aide_domicile','ServicesController@aide');
Route::get('/repit_accompagnement','ServicesController@accompagnement');
Route::get('/Conciliation_travail_famille','ServicesController@conciliation_fammille');
Route::get('/Peinture_bricolage','ServicesController@peinture_bricolage');
Route::get('/Jardinage','ServicesController@jardinage');
Route::get('/Nettoyage','ServicesController@nettoyage');
Route::get('/contact_us','ServicesController@contact');
