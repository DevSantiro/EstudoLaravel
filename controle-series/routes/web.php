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

// get(CaminhoLogico(url), NomedoControlador@NomeFunção )


// Page inicial

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'EntrarController@index')->name('entrar');


Route::get('/series', 'SeriesController@index')->name('listar_series');
Route::get('/series/criar', 'SeriesController@create')->name('form_criar_serie')->middleware('autenticador');
Route::post('/series/criar', 'SeriesController@store')->middleware('autenticador');
Route::delete('/series/{id}', 'SeriesController@destroy')->middleware('autenticador');

Route::post('/series/{id}/editaNome', 'SeriesController@editaNome')->middleware('autenticador');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index');


#Temporadas 
Route::get('/temporadas/{temporada}/episodios', 'EpisodiosController@index')->name('episodios_serie');
Route::post('/temporadas/{temporada}/episodios/assistir', 'EpisodiosController@assistir')->middleware('autenticador');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


#Login

Route::get('/entrar', 'EntrarController@index')->name('entrar');
Route::post('/entrar', 'EntrarController@entrar');


#Registrar 

Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');

Route::get('/sair', function (){
    Auth::logout();
    return redirect('/');
});


