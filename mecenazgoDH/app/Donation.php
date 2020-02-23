<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['project_id', 'user_id','amount'];

    protected $table = 'donations';


    public function projects(){
       return $this->belongsTo('App\Project');
    }

    public function users(){
        return $this->belongsTo('App\Users');
    }

}
