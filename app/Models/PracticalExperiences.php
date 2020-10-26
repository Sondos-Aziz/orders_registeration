<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticalExperiences extends Model
{
    protected $fillable = [
        'workplace','from','to','job','salary','reason_for_leaving','user_id',
    ];

    

    public function users(){
        $this->belongsToMany('App\User');
    }
}
