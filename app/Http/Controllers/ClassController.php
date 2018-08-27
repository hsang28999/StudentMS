<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $class = DB::table('classes')
            ->join('teachers', 'classes.teachers_teacherId', '=', 'teachers.teacherId')
            ->select('classes.*','teachers.teacherName','teachers.email')
            ->get();
        return view('academic.class')-> with('class',$class );
    }

    public  function edit(Request $request,$classId){
        $class = Classes::where('classId', $classId)->first();
        $teacher = Teacher::all();
        return view('academic.editClass') ->  with('class',$class)
                                          ->  with('teacher',$teacher);
    }

    public function  update(Request $request,$classId){
        $class = Classes::where('classId',$classId)-> update([
            'className' => Input::get('className'),
            'teachers_teacherId' => $request->teachers_teacherId
        ]);
        return redirect() -> action('ClassController@index');
    }

    public function delete(Request $request,$classId){
        $classes = Classes::where('classId', $classId)->delete();

        return redirect() -> action('academic_class.class');
    }
}

