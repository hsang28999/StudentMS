<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'classId';

    public function student(){
    	return $this->hasMany('App\Student', 'classes_classId', 'classId');
    }

    public function schoolday(){
    	return $this->hasMany('App\SchoolDay','class_classId', 'classId');
    }

    public function teacher(){
    	return $this->belongsTo('App\Teacher', 'teacher_teacherId', 'classId');
    }
}
