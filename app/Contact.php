<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    public function category()
    {
        return $this->belongsTo('Portfolio\SubjectContact', 'subjects_id');
    }

    public function user()
    {
        return $this->belongsTo('Portfolio\User', 'users_id');
    }

}
