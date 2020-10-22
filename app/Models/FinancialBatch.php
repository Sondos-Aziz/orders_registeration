<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialBatch extends Model
{
     protected $fillable = [
        'batchValue','batchValueCurrancy_id','order_id','batchDate','notice','confirmed',
    ];

    public function order(){
        $this->belongsTo('App\Models\Order');
    }

    public function curreny(){
        $this->hasOne('App\Models\Currancy');
    }
}
