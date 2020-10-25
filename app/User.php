<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable , HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','firstName_ar','middleName_ar','lastName_ar','firstName_en','middleName_en','lastName_en',
        'slug_en','slug_ar','identity','dateOfBirth','qualification_id','currentJob_id','specialization_id','workplace',
        'mobile','mobileAlternative','familyType_id','neighborhoods_id','otherPlace'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders(){
        $this->hasMany('App\Models\Order');
    }

    public function qualification (){
        $this->hasOne('App\Models\Qualification');
    }

    public function job (){
        $this->hasOne('App\Models\Job');
    }

    public function specialization (){
        $this->hasOne('App\Models\Specialization');
    }

    public function Neighborhoods (){
        $this->hasOne('App\Models\Neighborhoods');
    }

    public function familyType (){
        $this->hasOne('App\FamilyType');
    }

   

}
