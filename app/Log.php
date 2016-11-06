<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
	use LogTrait;

	protected $table = 'logs';
}
