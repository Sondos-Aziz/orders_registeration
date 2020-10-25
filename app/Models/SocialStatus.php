<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialStatus extends Model
{
    public function users(){
        $this->hasMany('App\User');
    }
}
