<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('auth/login');
});

Route::get('home','HomeController@index');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

Route::get('listar', 'TallerController@listar');

Route::get('realizar/{id}', 'TallerController@realizar');

Route::resource('taller','TallerController');

Route::resource('taller','TallerController');

Route::resource('recurso','RecursoController');

Route::get('pdf', 'PdfController@invoice');

Route::resource('curso','CursoController');

Route::get('ev3/{nombre}','ev3Controller@index');

Route::resource('menu','MenuController@listar');

//Route::get('partials/sidebar','MenuController@listar2');