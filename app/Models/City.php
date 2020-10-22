<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name'
    ];

    public function country(){
        $this->belongsTo('App\Models\Country');
    }
    public function neighborhoods(){
        $this->hasMany('App\Models\Neighborhood');
    }
    
}
