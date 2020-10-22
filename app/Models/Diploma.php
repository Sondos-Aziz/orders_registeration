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
}
