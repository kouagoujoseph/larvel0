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
Route::get('/', function () {
    return view('index');
});
Route::get('/','App\Http\Controllers\ManageCarController@accueil');

Route::resource('/location','App\Http\Controllers\ManageCarController');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});