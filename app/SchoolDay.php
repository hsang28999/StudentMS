<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolDay extends Model
{
    protected $table = 'school_days';

    public function schoolday(){
    	return $this->hasMany('App\SchoolDay','class_classId', 'schoolDayId');
    }
}
