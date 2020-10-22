<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyType extends Model
{
    protected $fillable = [
        'name'
    ];

    public function users(){
        $this->hasMany('App\User');
    }
    
}
