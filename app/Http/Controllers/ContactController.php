<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;

use Portfolio\Http\Requests\ContactFormRequest;

use Portfolio\Contact;

use Validator;


class ContactController extends Controller
{
    public function create(Request $request){
    	$op = false;
    	$validator = Validator::make($request->all(), [
            'op' => 'exists:subjects,id,active,1'
        ]);
        if ($validator->fails()) {
            return \Redirect::route('contact');
        }else{
        	if($request->get('op')!=null){
        		$op = $request->get('op');
        	}
        }


    	$subjects = \Portfolio\SubjectContact::where('active',1)->orderBy('order', 'asc')->get();

    	return view('contact')
    			->with('subjects', $subjects)
    			->with('op', $op);
    }

    public function store(ContactFormRequest $request)
    {
    	$phone = "";
    	if($request->get('phone')!=null){
    		$phone = $request->get('phone');	
    	}

    	$company = "";
    	if($request->get('company')!=null){
    		$company = $request->get('company');	
    	}	

    	$cv            = new Contact;
        $cv->email     = strtolower($request->get('email'));
        $cv->company   = ucwords(strtolower($request->get('company')));
        $cv->name      = ucwords(strtolower($request->get('name')));
        $cv->users_id  = 1;
        $cv->subjects_id = $request->get('subject');
        $cv->IP        = $request->ip();
        $cv->company   = $company;
        $cv->mobile	   = $phone;
        $cv->message   = $request->get('message');
        $cv->save();

        if(SendMailController::sendMailAdminContact($cv)){
            return \Redirect::route('contact')
            ->with('message', 'I have received your message and I will contact you shortly. ');
        }else{
            echo "ERROR"; exit;
        }
    }
}
