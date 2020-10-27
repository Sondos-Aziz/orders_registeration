<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunicationType extends Model
{

    protected $fillable = [
        'name',
    ];
    
    public function communications(){
        $this->hasMany('App\Models\communication');
    }

}
