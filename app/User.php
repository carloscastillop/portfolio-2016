<?php

namespace Portfolio;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cvrequests()
    {
        return $this->hasMany('Portfolio\Cvrequest', 'users_id');
    }

    public function skills()
    {
        return $this->hasMany('Portfolio\Skill', 'users_id');
    }
}
