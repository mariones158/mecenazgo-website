<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deposit extends Model
{
    protected $fillable = [];
    use SoftDeletes;
//$fillable - $guarded
    protected $table = 'deposits';

    public function users(){
    return $this->belongsToMany('App\Users_id');
    }

    public function donations(){
    return $this->belongsToMany('App\Donations_id');
}




    //un deposito "ingreso" pertenece pertenece  a un usuario

    //public function project(){
    //return $this->belongsTo(Project::class, "project_id");
    //}

    //un deposito "ingreso" pertenece a un proyecto x usuario
}
