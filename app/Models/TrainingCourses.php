<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCourses extends Model
{
    protected $fillable = [
        'name','from','to','other_details','user_id',
    ];

   

    public function users(){
        $this->belongsToMany('App\User');
    }
}
