<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'amount'
     ];

    protected $table = 'donations';


    public function projects(){
    return $this->belongsTo('App\Projects_id');
    }

    public function users(){
    return $this->belongsToMany('App\Users_id');
    }

}
