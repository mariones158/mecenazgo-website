<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['source', 'type'];

    public function projects() {
      return $this->hasMany('App\Project');
    }
}
