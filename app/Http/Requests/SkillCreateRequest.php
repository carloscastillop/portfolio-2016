<?php

namespace Portfolio\Http\Requests;

use Portfolio\Http\Requests\Request;

class SkillCreateRequest extends Request
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
            'name'          => 'required|min:1|max:255',
            'description'   => 'required|min:1',
            'order'         => 'required|numeric|min:1|max:9999',
            'category'      => 'required|numeric|exists:skill_categories,id,active,1'
        ];
    }
}
