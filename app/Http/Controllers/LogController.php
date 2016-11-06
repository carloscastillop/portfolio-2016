<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;

class LogController extends Controller
{
    
	/* I WILL DELETE THIS CONTROLLER !!!!   DO NOT USE ANYMORE
	USE LOGTRAIT
	 */
    public static function createLog($text){
    	$log = new \Portfolio\Log;
    	$log->description = $text;
    	$log->save();
    	//return true;
    }
}
