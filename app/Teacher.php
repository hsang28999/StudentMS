<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'teacherId';
    public $timestaps = 'true';

    public function class(){
    	return $this->hasMany('App\Class','teacher_teacherId', 'teacherId');
    }
}
