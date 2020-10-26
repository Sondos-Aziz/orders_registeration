<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id','diploma_id','knowledgeWays_id','total','totalCurrancy_id','desire_id','option1',
        'option2','status','employee_id','paymentType_id',
        'from','to','organiziation_id','volunteering_id','reservationFeesDate','reservationFees',
        'reservationFeesCurrancy_id','orderPaper','notices',
   
    ];


    public function diplpma()
    {
        $this->belongsTo('App\Models\Diplpma');
    }
    public function user()
    {
        $this->belongsTo('App\User');
    }
    public function financialBatches()
    {
        $this->hasMany('App\Models\FinancialBatch');
    }

    public function knowledageWay(){
        $this->hasOne('App\Models\KnowledageWay');
    }

     public function deisre(){
        $this->hasOne('App\Models\Desire');
    }

    public function curreny(){
        $this->hasOne('App\Models\Currancy');
    }

    public function paymentType(){
        $this->hasOne('App\Models\PaymentType');
    }

    public function organization(){
        $this->hasOne('App\Models\Organization');
    }
    
}
