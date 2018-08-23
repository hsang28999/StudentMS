<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    public function mark(){
    	return $this->belongsTo('App\Subject', 'subjects_subjectId', 'subjectId');
    }
}
