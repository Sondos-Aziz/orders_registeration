<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currancy extends Model
{
    protected $fillable = [
        'name','ex_rate',
    ];

    public function diplomaes(){
        $this->hasMany('App\Models\Diploma');
    }

    public function orders(){
        $this->hasMany('App\Models\Order');
    }
    
    public function financialBatches(){
        $this->hasMany('App\Models\FinancialBatch');
    }
}
