<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
    public function index(){
        $student = Student::all();
        $class = Classes::all();
        return view('student.student') -> with('student',$student)
                                        -> with('class',$class );
    }
    public function searchStudentByClass($id){

        $class = Classes::all();
        $studentByClass = Student::where('classes_classId',"LIKE",'%'.$id . '%') -> get();
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
        $student = Student::where('studentId',$id) -> get();
        return view('student.viewStudent') -> with('student',$student);
    }
}
