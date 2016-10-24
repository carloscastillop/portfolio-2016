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

///HOME
Route::get('/', function () {
    $user  	= \Portfolio\User::find(1);
    $skills = \Portfolio\Skill::where('active',1)->where('skill_categories_id',1)->orderBy('order', 'asc')->take(12)->get();
    $leProject = \Portfolio\Project::where('active',1)->where('home',1)->orderBy('order', 'asc')->take(2)->inRandomOrder()->get();
    return view('home')->with('skills', $skills)->with('leProject', $leProject)->with('user', $user); 
});

Route::get('/portfolio', function () {
	$projects = \Portfolio\Project::where('active',1)->orderBy('order', 'asc')->get();
	$skills   = \Portfolio\Skill::where('active', 1)->where('skill_categories_id',1)->orderBy('order', 'asc')->get();

    return view('portfolio')->with('projects', $projects)->with('skills', $skills);
});

/// detalle portfolio
Route::get('/portfolio/{slug}/{id}', function ($slug, $id) {
	$query          = array('id' => $id);
    $rules = array(
        'id'    => 'required|numeric|exists:projects,id,active,1'
        );
    $validator = Validator::make($query, $rules);
    if ($validator->fails()) {
    	return \Redirect::to('/portfolio');
    }
    $project = \Portfolio\Project::find($id);
    return view('portfolio-detail')->with('project', $project);
})->where('id', '[0-9]+');

/// Filtrar portfolio por skill 
Route::get('/portfolio/skill/{slug}/{id}', function ($slug, $id) {
	$query          = array('id' => $id);
    $rules = array(
        'id'    => 'required|numeric|exists:skills,id,active,1'
        );
    $validator = Validator::make($query, $rules);
    if ($validator->fails()) {
    	return \Redirect::to('/portfolio');
    }

    $projects = \Portfolio\Project::with('skills')->whereHas('skills', function($q) use ($id){
		$q->where('skills.id', '=', $id);
	})->get();
	$skills   = \Portfolio\Skill::where('active', 1)->where('skill_categories_id',1)->orderBy('order', 'asc')->get();

	$theSkill = \Portfolio\Skill::find($id);

    return view('portfolio')->with('projects', $projects)->with('skills', $skills)->with('theSkill', $theSkill);
})->where('id', '[0-9]+');


Route::get('/skills-competences', function () {
	$skills = \Portfolio\Skill::where('active',1)->orderBy('order', 'asc')->where('skill_categories_id',1)->get();
	$others = \Portfolio\Skill::where('active',1)->orderBy('order', 'asc')->where('skill_categories_id',2)->get();
    return view('skills-competences')
    		->with('skills', $skills) 
    		->with('others', $others);
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
/* ===== CONTACT    ==== */
/*=======================*/

Route::get('contact'	,['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact'	,['as' => 'contact-store', 'uses' => 'ContactController@store']);

/*=======================*/
/* ======== SMS  ======= */
/*=======================*/

Route::post('send-sms'	,'SMSController@create');




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

	    //Projects
	    Route::resource('projects'	   		,'ProjectController');
	    Route::post('projects/image'     	,'ProjectController@uploadImage');
	    Route::post('projects/imagecrop'   	,'ProjectController@uploadImageCrop');

	});
});




