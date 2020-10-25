<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = [
        'name'
    ];

    public function users(){
        $this->belongsToMany('App\User','user_qualification','qualification_id','user_id','id','id');
    }

    public function specialization(){
        $this->hasOne('App\Models\Specialization');
    }
}
