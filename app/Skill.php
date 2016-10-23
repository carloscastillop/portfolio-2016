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
        return $this->belongsTo('Portfolio\User', 'users_id');
    }

    public function projects()
    {
        return $this->belongsToMany('Portfolio\Project', 'projects_has_skills', 'skills_id', 'projects_id');
    }

    public function gallery()
    {
        return $this->hasMany('Portfolio\SkillGallery', 'skills_id'); //, 'skill_categories_id'
    }
}
