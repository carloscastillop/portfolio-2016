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
            return redirect()->route('contact');
        }else{
        	$op = $request->get('op','');
        }


    	$subjects = \Portfolio\SubjectContact::where('active',1)->orderBy('order', 'asc')->get();

        $metaTitle    = 'Contact me';
        $metaContent  = 'Get in touch with me today for a web site or web application';
        $metaKeywords = 'contact, manchester, web manchester,';

    	return view('contact')
    			->with('subjects', $subjects)
    			->with('op', $op)
                ->with('metaTitle', $metaTitle)
                ->with('metaContent', $metaContent)
                ->with('metaKeywords', $metaKeywords);
    }

    public function store(ContactFormRequest $request)
    {
    	$phone      = $request->get('phone','');
        $company    = $request->get('company','');

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

        if($cv->sendMailAdminContact($cv)){
            $text = 'New contact email sended from: '.$cv->name.' - '.$cv->email;
            LogController::createLog($text);

            return redirect()->route('contact')->with('message', 'I have received your message and I will contact you shortly. ');
        }else{
            $text = 'ERROR Sending email on Contact/form section';
            LogController::createLog($text);

            return redirect()->route('error');
        }
    }
}
