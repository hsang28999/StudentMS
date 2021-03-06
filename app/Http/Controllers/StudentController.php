<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(Request $request){

        $student = DB::table('students')
            ->join('classes', 'students.classes_classId', '=', 'classes.classId')
            ->select('students.*','classes.className')
            ->where('classes.classId','=',$request->class)
            ->get();
        $class = Classes::all();
        return view('student.student') -> with('student',$student)
                                        -> with('class',$class );
    }
    public function searchStudentByClass($id){

        $class = Classes::all();
        $studentByClass = Student::where('classes_classId',$id) -> get();
        return view('student.student') -> with('student',$studentByClass)
                                      -> with('class',$class );
    }
    public  function store(){

        $student = new Student();
        $student -> studentName = Input::get('name');
        $student -> phoneNumber = Input::get('phone');
        $student -> classes_classId = Input::get('studentClass');
        $student -> address = Input::get('address');
        $student -> gender = Input::get('gender');
        $student -> dateOfBirth = Input::get('birthday');
        $student -> studentCode = Input::get('studentCode');
        $student -> email = Input::get('email');
        $student -> save();
        return redirect() -> route('student');

    }
    public function add(){
        $class = Classes::all();
        return view('student.addStudent') -> with('class',$class);
    }
    public function viewStudent($id){
        $student = Student::where('studentId',$id) -> get();
        return view('student.viewStudent') -> with('student',$student);
    }
    public function edit($id){
        $class = Classes::all();
        $student = Student::where('studentId',$id)->first();
        return view('student.editStudent') -> with('class',$class)
                                        -> with('student',$student);
    }
    public function update($id){

        $student = Student::where('studentId',$id)
        ->update([
            'studentName' => Input::get('name'),
            'phoneNumber' => Input::get('phone'),
            'classes_classId' => Input::get('studentClass'),
            'address' => Input::get('address'),
            'gender' => Input::get('gender'),
            'dateOfBirth' => Input::get('birthday'),
            'studentCode' => Input::get('studentCode'),
            'email' => Input::get('email')
        ]);
        return redirect() -> route('student');
    }
    public function delete($id){
        $student = Student::where('studentId',$id) -> delete();
        return redirect() -> route('student');
    }
}
