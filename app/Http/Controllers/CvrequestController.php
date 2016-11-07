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
        $metaTitle    = 'Get my CV';
        $metaContent  = 'I am pleased to present my CV for your consideration as a PHP & Front-end Developer.';
        $metaKeywords = 'cv, manchester, web manchester,';

        return view('cv-request.get-my-cv')
                ->with('metaTitle', $metaTitle)
                ->with('metaContent', $metaContent)
                ->with('metaKeywords', $metaKeywords);
    }

    public function store(CvFormRequest $request)
    {

        $cv            = new Cvrequest;
        $cv->email     = strtolower($request->get('email'));
        $cv->company   = ucwords(strtolower($request->get('company')));
        $cv->name      = ucwords(strtolower($request->get('name')));
        $cv->mobile    = $request->get('dnis');
        $cv->users_id  = 1;
        $cv->IP        = $request->ip();
        $cv->code      = md5($cv->email."-".date('YmdHis')."-".rand(1000,9999));
        $cv->active    = 1;
        $cv->save();

        if($cv->sendMailAdminCvRequest($cv)){

            $text = 'email sended on CV Request/form section from: '.$cv->name.' - '.$cv->email;
            LogController::createLog($text);

            return \Redirect::route('get-my-cv')
            ->with('message', 'The system will validate your email, if all is OK, you will receive an email with my CV. Thank you!! ');
        }else{
            $text = 'ERROR Sending email on CV Request/form section';
            LogController::createLog($text);

            return redirect()->route('error');
        }

    	
    }


    ///CUANDO LOS DATOS SON ACEPTADOS PARA ENVIAR EL EMAIL
    public function yesCvRequest($codigo)
    {
        $query          = array('code' => $codigo);
        $rules = array(
            'code'    => 'required|exists:cv_requests,code,active,1',
            );
        $validator = Validator::make($query, $rules);
        if ($validator->fails()) {
            echo 'ERROR CODIGO '.$codigo.' -> '.$validator->errors()->first(); exit;
        } else {
            /// Se acepta el codigo y se envia el link para descargar el email
            $code = Cvrequest::where('code', $codigo)->first();
            if(!$code){
                echo "ERROR no existe codigo ".$codigo;
                return false;
            }

            $user = \Portfolio\User::find($code->users_id)->first();
            if(!$user){
                echo "ERROR no existe USER ".$code->users_id;
                return false;
            }

            $timeSend       = intval($code->sends);
            $code->send_at  = \Carbon\Carbon::now();
            $code->sends    = $timeSend+1;
            $code->save(); 


            if($code->sendMailuserCvRequestYes($code, $user)){
                echo 'OK, email sended'; 
            }else{
                echo 'Ha ocurrido un error al enviar el email';
            }
            

            
        }
        
    }

    public function noCvRequest($codigo)
    {
        echo $codigo;
    }
}
