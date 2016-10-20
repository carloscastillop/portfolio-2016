<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class SubjectContact extends Model
{
    protected $table = 'subjects';


    public function contacts()
    {
        return $this->hasMany('Portfolio\Contact'); 
    }

}
