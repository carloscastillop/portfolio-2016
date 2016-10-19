<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
	protected $table = 'skill_categories';
    
    public function skills()
    {
        return $this->hasMany('Portfolio\Skill'); //, 'skill_categories_id'
    }
}
