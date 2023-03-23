<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageCarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/','App\Http\Controllers\ManageCarController@accueil');
Route::get('/home_dashbord','App\Http\Controllers\ManageCarController@accueil');
Route::get('/home_dashbord','App\Http\Controllers\ManageCarController@accueil')->name('voitures');

Route::resource('/location','App\Http\Controllers\ManageCarController');
Route::get('/liste_voiture_louée','App\Http\Controllers\ManageCarController@voiture_louée')->name('voitures_louées');
Route::get('/location_voiture','App\Http\Controllers\ManageCarController@louer')->name('louer_voiture');
Route::get('/rendre_une_voiture','App\Http\Controllers\ManageCarController@rendre')->name('rendre');
Route::get('/contactez_nous','App\Http\Controllers\ManageCarController@contacter')->name('contact');
Route::get('deconnecter','App\Http\Controllers\ManageCarController@logout')->name('deconnexion');
//Route::get('locatio_par_defaut','App\Http\Controllers\ManageCarController@show')->name('locationDefault');

Route::resource('/locations','App\Http\Controllers\LocationController');
Route::get('/location_dashboard','App\Http\Controllers\LocationController@index')->name('location_dashboard');

Route::get('/location_panier','App\Http\Controllers\LocationController@cart')->name('panier');
Route::get('/location_panier','App\Http\Controllers\LocationController@rendre_voiture_voiture')->name('rendre_voiture');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    //Route::get('/dashboard', function () {
       //return view('dashboard');
   // })->name('dashboard');
    
});
