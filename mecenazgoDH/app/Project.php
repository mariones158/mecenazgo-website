<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'user_id', 'title', 'image', 'colour', 'description',
        'amount', 'status', 'description_detail', 'description_general',
        'description_title','photo_id'
    ];


    protected $table = 'projects';

    public function user(){
    return $this->belongsTo('App\User');
    }

    public function donations(){
        return $this->hasMany('App\Donation');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
