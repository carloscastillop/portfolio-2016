<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;

class UserController extends Controller
{
    public static function getSocials($user){
    	\Portfolio\User::find($user);

    	return $user;
    }
}
