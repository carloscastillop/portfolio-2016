<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	use MailTrait;

	use LogTrait;

    protected $table = 'contacts';

    public function subject()
    {
        return $this->belongsTo('Portfolio\SubjectContact', 'subjects_id');
    }

    public function user()
    {
        return $this->belongsTo('Portfolio\User', 'users_id');
    }

}
