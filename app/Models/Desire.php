<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desire extends Model
{
    protected $fillable = [
        'name'
    ];

    public function orders(){
        $this->hasMany('App\Models\Order');
    }
}
