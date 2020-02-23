<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deposit extends Model
{
    protected $fillable = ["user_id","amount"];

    use SoftDeletes;

    public function users(){
        return $this->hasMany('App\User');
    }

}
