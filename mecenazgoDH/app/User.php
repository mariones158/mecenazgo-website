<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_type_id','name',
        'firstname','lastname','indenfication_number',
        'avatar','email','password','amount'
    ];

    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
/*
    public function getFullName() {
        return $this->firstname . ' ' . $this->lastname;
    } */

    public function userType(){
        return $this->belongsTo('App\UserType');
    }

    public function projects(){
        return $this->hasMany('App\Project');
    }

    public function donations(){
        return $this->hasMany('App\Project', 'donations');
    }

    public function deposits(){
        return $this->belongsTo('App\Deposit');
    }


}
