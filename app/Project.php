<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    public function skills()
    {
        return $this->belongsToMany('Portfolio\Skill', 'projects_has_skills', 'projects_id', 'skills_id');

    }

    public function user()
    {
        return $this->belongsTo('Portfolio\User');
    }
}
