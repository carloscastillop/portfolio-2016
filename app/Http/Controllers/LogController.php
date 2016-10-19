<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;

class LogController extends Controller
{
    public static function createLog($text){
    	$log = new \Portfolio\Log;
    	$log->description = $text;
    	$log->save();
    	//return true;
    }
}
