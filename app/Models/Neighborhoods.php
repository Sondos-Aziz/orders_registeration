<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Neighborhoods extends Model
{
    protected $fillable = [
        'name'
    ];

    public function city(){
        $this->belongsTo('App\Models\City');
    }
    
    public function users (){
        $this->hasMany('App\User');
    }
}
