<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\App;
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

/* Route::get('/', function () {
    return view('index');
}); */

//App::setLocale('es');

Route::get('/',[Homecontroller::class,'indexES']);
Route::get('/ca',[Homecontroller::class,'indexCA']);
Route::get('/en',[Homecontroller::class,'indexEN']);
Route::post('/form_contact',[Homecontroller::class,'formulario']);

Route::get('/legal_notice',[Homecontroller::class,'legal_notice']);

