<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'user_id', 'title', 'image', 'colour', 'description',
        'amount', 'status', 'description_detail', 'description_general',
        'description_title'
    ];


    protected $table = 'projects';

    public function user(){
    return $this->belongsTo('App\User_id');
    }

    public function donations(){
    return $this->hasMany('App\Donations_id');
    }

    public function deposits(){
        return $this->hasMany('App\Deposits_id');
        }

}
