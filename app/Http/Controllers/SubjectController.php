<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Subject;
use App\Teacher;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubjectController extends Controller
{
    public function index(){
        $subject = Subject::all();

        return view('academic.subject')-> with('subject',$subject);
    }
    public function  add(){
        $class = Classes::all();
        $teacher = Teacher::all();
        return view('academic.addSubject') -> with('class',$class)
                                            ->with('teacher',$teacher);
    }
    public function store(){
        $subject = new Subject();
        $subject -> subjectName = Input::get('subjectName');
        $subject -> passMark = Input::get('passMark');
        $subject -> finalMark = Input::get('finalMark');
        $subject -> teachers_teacherId = Input::get('teacherId');
        $subject -> save();
        return redirect() -> route('subject');

    }
    public  function edit(Request $request){
        $class = Classes::all();
        $teacher = Teacher::all();
        $subject = Subject::where('subjectId',$request -> id) -> first();
        return view('academic.editSubject') ->  with('class',$class)
                                            ->  with('teacher',$teacher)
                                            ->  with('subject',$subject);
    }
    public function  update(Request $request){
        $subject = Subject::where('subjectId',$request -> id)-> update([
            'subjectName' => Input::get('subjectName'),
            'passMark' => Input::get('passMark'),
            'finalMark' => Input::get('finalMark'),
            'teachers_teacherId' => Input::get('teacherId')
        ]);
        return redirect() -> route('subject');
    }
    public function delete(Request $request){
        $subject = Subject::where('subjectId',$request -> id) -> delete();
        return redirect() -> route('student');
//        return response('Delete Success',200);
    }
}
