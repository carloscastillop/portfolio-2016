<?php

namespace Portfolio\Http\Requests;

use Portfolio\Http\Requests\Request;

class ContactFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subject'   => 'required|exists:subjects,id,active,1',
            'name'      => 'required|min:1|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'min:5|max:12',
            'company'   => 'min:1|max:255',
            'message'   => 'required|min:3|max:9999',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }
}
