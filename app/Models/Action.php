<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{

    protected $fillable = [
        'name','communication_id'
    ];

    public function communication(){
        $this->hasOne('App\Models\Communication');
    }
}
