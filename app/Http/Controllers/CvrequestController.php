<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;

use Portfolio\Http\Requests\CvFormRequest;

use Portfolio\Cvrequest;

use Validator;





class CvrequestController extends Controller
{
    public function create()
    {
        return view('cv-request.get-my-cv');
    }

    public function store(CvFormRequest $request)
    {

        $cv            = new Cvrequest;
        $cv->email     = ucwords(strtolower($request->get('email')));
        $cv->company   = ucwords(strtolower($request->get('company')));
        $cv->name      = strtolower($request->get('name'));
        $cv->users_id  = 1;
        $cv->IP        = $request->ip();
        $cv->code      = md5($cv->email."-".date('YmdHis')."-".rand(1000,9999));
        $cv->active    = 1;
        $cv->save();

        \Mail::send('emails.cv-request',
		    array(
		        'name'    => $cv->name,
		        'email'   => $cv->email,
                'company' => $cv->company,
                'ip'      => $cv->IP,
                'code'    => $cv->code      
            ), function($message) use ($cv)
		{
		    $message->to('portfolio@fionaycarlos.cl', 'Carlos Castillo')
		    	->subject('New CV request from '.$cv->name);
		});

    	return \Redirect::route('get-my-cv')
      		->with('message', 'The system will validate your email, if all is OK, you will receive an email with my CV. Thank you!! ');
    }

    public function yesCvRequest($codigo)
    {
        $query          = array('code' => $codigo);
        $rules = array(
            'code'    => 'required|exists:cv_requests,code,active,1',
            );
        $validator = Validator::make($query, $rules);
        if ($validator->fails()) {
            echo 'ERROR'; exit;
            //return Redirect::to('/lista?error-novios')->withErrors($validator);
        } else {
            /// Se acepta el codigo y se envia el link para descargar el email

            echo 'OK'; exit;
        }
        
    }

    public function noCvRequest($codigo)
    {
        echo $codigo; exit;
    }
}
