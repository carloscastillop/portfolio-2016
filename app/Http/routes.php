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
    $skills = \Portfolio\Skill::where('active',1)->where('skill_categories_id',1)->orderBy('order', 'asc')->take(12)->get();
    return view('home')->with('skills', $skills); 
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

/// detalle portfolio
Route::get('/portfolio/{slug}/{id}', function ($slug, $id) {
    return view('portfolio-detail');
})->where('id', '[0-9]+');

Route::get('/skills-competences', function () {
	$skills = \Portfolio\Skill::where('active',1)->orderBy('order', 'asc')->where('skill_categories_id',1)->get();
	$others = \Portfolio\Skill::where('active',1)->orderBy('order', 'asc')->where('skill_categories_id',2)->get();
    return view('skills-competences')
    		->with('skills', $skills) 
    		->with('others', $others);
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/login', function () {
    return \Redirect::to('backend'); 
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



/*=======================*/
/*=======================*/
/* ====== ADMIN ======== */
/*=======================*/
/*=======================*/

//LOGIN
Route::get( '/backend'           		,'AdminController@adminWelcome');
Route::post('/backend/login'         	,'AdminController@adminDoLogin');
Route::get( '/exit'               		,'AdminController@doLogout');

$router->group(['middleware' => 'auth'], function($router) {

	Route::group(['prefix' => 'backend'], function() {
	    
	    //DASHBOARD
	    Route::get('/dashboard'        ,'AdminController@adminDashboard');

	    //SKILLs
	    Route::resource('skills'	   ,'SkillController');
	    Route::post('skills/image'     ,'SkillController@uploadImage');
	    Route::post('skills/imagecrop'   ,'SkillController@uploadImageCrop');

	});
});




