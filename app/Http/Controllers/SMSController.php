<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;

use Portfolio\Http\Requests\SMSFormRequest;

use Validator;


class SMSController extends Controller
{
    
	/*
	http://ida.itdchile.cl/publicSms/sendSms.html?username=carloscastillo&password=carloscastillopardo&phone=447774041604&message=hola+mundo
	 */
    public function create(SMSFormRequest $request){

    	$username 	= \Config::get('settings.smsUser');
    	$password 	= \Config::get('settings.smsPassword');
    	$area 		= '44';
    	$phone 		= $area.$request->get('dnis');
    	$usercode 	= $this->codeSMS();
    	$message 	= 'Hello! this is a test SMS, your code is: '.$usercode;

    	$client = new \GuzzleHttp\Client();
		$res = $client->request('GET', 'http://ida.itdchile.cl/publicSms/sendSms.html', [
		    'query' => ['username' 	=> $username,
		    			'password' 	=> $password,
		    			'phone'		=> $phone,
		    			'message'	=> $message]
		]);
		$code 		= $res->getStatusCode(); // 200		
		$reason 	= $res->getReasonPhrase(); // OK
		$body 		= $res->getBody();
		$jsonresponse	= '';
		$response 		= '';

		if($body == 'INTERNAL ERROR'){
			$response 		= 'INTERNAL ERROR';
			$jsonresponse 	= '997';
		}elseif($body == 'NOT ENOUGHT CREDITS'){
			$response 		= 'NOT ENOUGHT CREDITS';
			$jsonresponse 	= '762';
		}elseif($body == 'WRONG USERNAME OR PASSWORD'){
			$response 		= 'WRONG USERNAME OR PASSWORD';
			$jsonresponse 	= '926';
		}elseif($body == 'BAD PARAMETERS'){
			$response 		= 'BAD PARAMETERS';
			$jsonresponse 	= '231';
		}elseif($body == 'BLACKLISTED'){
			$response 		= 'BLACKLISTED';
			$jsonresponse 	= '009';
		}elseif($body == 'MAXIMUM TRAFFIC EXCEEDED'){
			$response 		= 'MAXIMUM TRAFFIC EXCEEDED';
			$jsonresponse 	= '888';
		}else{ 
			//// OK5aa91669-872b-463c-9467-f190ce396b1b
			$response 		= substr($body, 2);
			$jsonresponse 	= 'ok';
		}

		

		$sms 				= new \Portfolio\SMS;
		$sms->dnis 			= $phone;
		$sms->message 		= $message;
		$sms->response 		= $response;
		$sms->status_code 	= $code;
		$sms->reason_phrase	= $reason;
		$sms->active 		= true;
		$sms->users_id		= 1;
		$sms->user_code 	= $usercode;
		$sms->save();



		$text = 'Usuario DNIS:<strong>'.$phone.'</strong> ha enviado un SMS <br>message: <strong>'.$message.'</strong><br>response system:'.$response.', ['.$body.']<br>status response: '.$code.'<br>user code:'.$usercode;
        LogController::createLog($text);

        return response()
            ->json(['phone' => $phone, 'leResponse' => $jsonresponse]);
    }

    public function codeSMS(){
    	$count  = \Portfolio\SMS::all()->count();
        $rand   = rand(1000, 9999);
        $cod    = "ABCDEFGHJKMPRSTUVWYZ";
        $elcod  ="";
        for($i=0; $i<4; $i++){
            $elnum = rand(0, strlen($cod)-1);
            $elcod .= $cod[$elnum];
        }
        return $elcod.=$rand.$count;
    }
}
