<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

trait MailTrait {

    public function miMetodo(){
		return 'Este es el resultado de miMetodo de miTrait';
    }


    /*Send email to admin from contact form*/
    public function sendMailAdminContact($cv){

        \Mail::queue('emails.contact',
            array(
                'name'      => $cv->name,
                'email'     => $cv->email,
                'company'   => $cv->company,
                'subject'   => $cv->subject->name,
                'mobile'    => $cv->mobile,
                'bodyMessage'    => $cv->message,
                'ip'        => $cv->IP
            ), function($message) use ($cv)
        {
            $message->to('info@carloscastillo.cl', 'Carlos Castillo')
                    ->replyTo($cv->email, $cv->name)
                    ->cc($cv->email, $cv->name)
                    ->subject('New Contact from '.$cv->name);
        });
        return true;
    }


    /* notify when some user want my CV */
    public static function sendMailAdminCvRequest($cv){

    	\Mail::queue('emails.cv-request',
		    array(
		        'name'    => $cv->name,
		        'email'   => $cv->email,
                'mobile'  => '44 '.$cv->mobile,
                'company' => $cv->company,
                'ip'      => $cv->IP,
                'code'    => $cv->code      
            ), function($message) use ($cv)
		{
		    $message->to('info@carloscastillo.cl', 'Carlos Castillo')
		    	->subject('New CV request from '.$cv->name);
		});
		return true;

    }

    //SEND MY CV BY EMAIL
    public static function sendMailuserCvRequestYes($cvRequest, $user){
    	
    	$ago =  \Carbon\Carbon::createFromTimeStamp(strtotime($cvRequest->created_at))->diffForHumans();

        $portfolio = $user->projects()->orderBy('id', 'desc')->get();


    	\Mail::queue('emails.cv-request-yes',
		    array(
		        'name'    	=> $cvRequest->name,
		        'email'   	=> $cvRequest->email,
                'userName'  => $user->name,
                'userProfession' => $user->profession,
                'userFile' 	=> \Config::get('settings.uploadCV').$user->cv,
                'portfolio' => $portfolio,
                'ago'	  	=> $ago     
            ), function($message) use ($cvRequest, $user)
		{
		    $message->to($cvRequest->email, $cvRequest->name)
                    ->bcc(\Config::get('settings.emailCopia'), \Config::get('settings.nombreCopia'))
		    	 ->subject('CV requested from '.$user->name.' - '.$user->profession);
		});
		return true;

    }


}