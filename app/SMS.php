<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class SMS extends Model
{
    protected $table = 'sms_sent_messages';

    public function user()
    {
        return $this->belongsTo('Portfolio\User', 'users_id');
    }
}
