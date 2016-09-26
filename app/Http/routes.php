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

Route::post('loginme', 'loginController@login');

Route::get('listar', 'TallerController@listar');

Route::get('realizar/{id}', 'TallerController@realizar');

Route::resource('taller','TallerController');

Route::resource('taller','TallerController');

Route::resource('recurso','RecursoController');

Route::get('pdf', 'PdfController@invoice');

Route::resource('curso','CursoController');
