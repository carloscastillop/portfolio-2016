<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Cvrequest extends Model
{
    protected $table = 'cv_requests';

    public function user()
    {
        return $this->belongsTo('Portfolio\User');
    }
}
