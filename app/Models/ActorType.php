<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActorType extends Model
{
    public function users(){
        $this->hasMany('App\User');
    }
}
