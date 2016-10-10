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
    return view('home'); 
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/skills-competences', function () {
    return view('skills-competences');
});

Route::get('/contact', function () {
    return view('contact');
});

/*=======================*/
/* ===== CV REQUEST ==== */
/*=======================*/

Route::get('get-my-cv',	['as' => 'get-my-cv', 'uses' => 'CvrequestController@create']);
Route::post('get-my-cv',['as' => 'get-my-cv-store', 'uses' => 'CvrequestController@store']);

// example: http://carloscastillo.local/cv-request/no/0197fd1775aee6391bbbf9ab8c3d9659
//ACCEPT CV SEND
Route::get('cv-request/yes/{codigo}', array('codigo' => 'codigo', 'uses' => 'CvrequestController@yesCvRequest'));

//NO ACCEPT CV SEND
Route::get('cv-request/no/{codigo}', array('codigo' => 'codigo', 'uses' => 'CvrequestController@noCvRequest'));



