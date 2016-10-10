<?php

namespace Portfolio\Http\Requests;

use Portfolio\Http\Requests\Request;

class CvFormRequest extends Request
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
            'name'      => 'required|min:1|max:255',
            'company'   => 'required|min:1|max:255',
            'email'     => 'required|email|max:255'
        ];
    }
}
