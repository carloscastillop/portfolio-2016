<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class SkillGallery extends Model
{
    protected $table = 'skills_gallery';

    public function skill()
    {
        return $this->belongsTo('Portfolio\Skill');
    }
}
