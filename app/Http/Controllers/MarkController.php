<?php

namespace App\Http\Controllers;

use App\Mark;
use App\Classes;
use App\Subject;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input; 


class MarkController extends Controller
{
	public function index(){
		$class = Classes::all();
		$student = Student::all();
		$subject = Subject::all();
		$mark = Mark::all();
		return view('mark.mark')-> with('student', $student)
								-> with('subject', $subject)
								-> with('class', $class)
								-> with('mark', $mark);
	}


    public function create(){
    	return view('mark.addMark');
    }

    public function store(Request $request){
    	$mark = new Mark();
    	$mark -> students_studentId = Input::get('studentId');
    	$mark -> subjects_subjectId = Input::get('subjectId');
    	$mark -> markValue = Input::get('markValue');
    	$mark->save();
    	return radirect() ->route('mark');
    }

    public function add(){
    	$student = Student::all();
    	return view('mark.mark') ->with('student',$student);
    }

}
