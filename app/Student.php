<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'Students';
    public $timestamps = true;

//    protected  $dateFormat = 'dd-mm-yy';
    public function mark(){
    	return $this->belongsTo('App\student', 'students_studentId', 'markId');
    }
}
