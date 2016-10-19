<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;

use Portfolio\Http\Requests\AdminLoginRequest;


use Validator;

use Auth;

use Log;


class AdminController extends Controller
{
   

    public function doLogout(){
	    $text = 'Usuario '.auth()->user()->email.' ha cerrado sesion';
	    LogController::createLog($text);

	    Auth::logout(); // log the user out of our application
	    return \Redirect::to('/backend'); // redirect the user to the login screen
	}

	public function adminDoLogin(AdminLoginRequest $request){
		
		//$user = \Portfolio\User::where('email', $request->get('email'))->first();		
		$remember = false;
		if($request->get('rememberme')=='on'){
			$remember = true;
		}
		$email 		= $request->get('email');
		$password 	= $request->get('password');
		if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1], $remember)) {
			$text = 'Usuario '.auth()->user()->email.' ha iniciado sesion';
	    	LogController::createLog($text);
            return redirect()->intended('backend/dashboard');
        }else{
        	$text = 'Usuario '.$email.' ha iniciado sesion incorrectamente';
	    	LogController::createLog($text);
        	return \Redirect::to('backend/')
        		->with('messageError', 'User or password incorrect.');
        }
		
	}

	public function adminWelcome(){
		
		if (Auth::check()){

		 	return \Redirect::to('backend/dashboard');
		}
		return view('admin.login');
	}

	public function adminDashboard(){
		$logs = \Portfolio\Log::take(100)->orderBy('id','desc')->get();
		return view('admin.dashboard')
			->with('logs', $logs);	
	}

}
