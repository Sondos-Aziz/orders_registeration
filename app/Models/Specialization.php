<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    // protected $fillable = [
    //     'name'
    // ];

    public function users(){
        $this->hasMany('App\User');
    }

    public function qualifications(){
        $this->hasMany('App\Models\Qualification');
    }
}
