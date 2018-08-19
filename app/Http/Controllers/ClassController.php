<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\SchoolDay;
use App\Teacher;

use Illuminate\Support\Facades\Input;


class ClassController extends Controller
{
    public function create(){
        return view('academic.addclass');
    }

    public function store(Request $request){
        $allRequest = $request->all();
        $className = $allRequest['className'];
        $teachers_teacherId = Teacher::where('teacherName', $request->teacherName)->first();
        $teachers_teacherId = $allRequest['teachers_teacherId'];

        $insertData = array(
            'className' => $className,
            'teachers_teacherId' => $teachers_teacherId,
        );

        $classes = new Classes();
        $classes->insert($insertData);

        return redirect()->action('ClassController@index');
    }

    public function index(){
        $teacher = Teacher::all();
        $class = Classes::all();
        return view('academic.class') -> with('teacher',$teacher)
                                        -> with('class',$class );
    }

    public  function edit(Request $request){
        $class = Classes::where('classId', $request->classId)->first();
        $teacher = Teacher::all();
        return view('academic.editClass') ->  with('class',$class)
                                          ->  with('teacher',$teacher);
    }

    public function  update(Request $request){
        $class = Classes::where('classId',$request -> classId)-> update([
            'className' => Input::get('className'),
            'teachers_teacherId' => Input::get('teacherId')
        ]);
        return redirect() -> action('ClassController@index');
    }

    public function delete(Request $request){
        $classes = Classes::where('classId', $request->classId)->delete();

        return redirect() -> action('academic_class.class');
    }
}

