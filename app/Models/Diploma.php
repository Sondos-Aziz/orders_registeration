<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    protected $fillable = [
        'name','orderFees','diplomaFees','orderFeesCurrancy_id','diplomaFeesCurrancy_id','diplomaType_id',
        
    ];

    public function orders(){
        $this->hasMany('App\Models\Order');
    }

    public function currancy(){
        $this->hasOne('App\Models\Currancy');
    }

    public function users(){
        $this->belongsToMany('App\User');
    }

    public function courses(){
        $this->belongsToMany('App\Models\Course');
    }
    
    public function targeGroups(){
        $this->belongsToMany('App\Models\TargetGroup');
    }

}
