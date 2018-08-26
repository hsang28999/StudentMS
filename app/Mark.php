<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table = 'marks';
    protected $primaryKey = 'markId';

    public function subject(){
    	return $this->hasMany('App\Mark', 'subjects_subjectId', 'markId');
    }

    public function student(){
    	return $this->hasMany('App\Mark', 'students_studentId', 'markId');
    }
}
