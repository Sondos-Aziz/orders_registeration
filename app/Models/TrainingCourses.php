<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCourses extends Model
{
    public function users(){
        $this->belongsToMany('App\User');
    }
}
