<?php

namespace Portfolio\Http\Requests;

use Portfolio\Http\Requests\Request;

class ProjectCreateRequest extends Request
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
            'skills'        => 'required|min:1',
            'name'          => 'required|min:1|max:255',
            'client'        => 'required|min:1|max:255',
            'description'   => 'required|min:1',
            'myPhoto'       => 'required|min:1|max:255',
            'order'         => 'required|numeric|min:1|max:9999'
        ];
    }
}
