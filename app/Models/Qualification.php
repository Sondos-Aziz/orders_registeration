<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = [
        'name'
    ];

    public function users(){
        $this->hasMany('App\User');
    }
    
}
