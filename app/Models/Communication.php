<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{

    protected $fillable = [
        'user_id','diploma_id','employee_id','subject','callType','comType_id','callDate'
    ];

    public function user(){
        $this->hasOne('App\User');
    }

    public function diploma(){
        $this->hasOne('App\Models\Diploma');
    }

    public function communicationType(){
        $this->hasOne('App\Models\CommunicationType');
    }

    public function actions(){
        $this->hasMany('App\Models\Actions');
    }

    public function callStatus(){
        $this->belongsTo('App\Models\CallStatus');
    }
    
}
