<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TargetGroup extends Model
{
    
    public function diplomes(){
        $this->belongsToMany('App\Models\Diploma');
    }
}
