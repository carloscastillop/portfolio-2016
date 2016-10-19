<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';

    public function category()
    {
        return $this->belongsTo('Portfolio\SkillCategory', 'skill_categories_id');
    }

    public function user()
    {
        return $this->belongsTo('Portfolio\User');
    }
}
