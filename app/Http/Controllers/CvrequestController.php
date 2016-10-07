<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CvFormRequest;


class CvrequestController extends Controller
{
    public function create()
    {
        return view('cv-request.get-my-cv');
    }

    public function store(CvFormRequest $request)
    {
    	return \Redirect::route('get-my-cv')
      		->with('message', 'The system will validate your email, if all is OK, you will receive an email with my CV. Thank you!! ');
    }
}
