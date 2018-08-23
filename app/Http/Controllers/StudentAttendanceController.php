<?php

namespace App\Http\Controllers;

use App\Classes;
use App\SchoolDay;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;


class StudentAttendanceController extends Controller
{
    public function index(){
        $student = Student::all();
        $class = Classes::all();
        return view('attendance.studentAttendance') -> with('student',$student)
            -> with('class',$class );
    }
    public function attendance(){
//        $student = Student::all();
        $class = Classes::all();
        if (Input::has('classId')){
            $schooldayId = SchoolDay::where([
                ['classes_classId',Input::get('classId') ],
                ['dayValue',Carbon::now()-> toDateString().' 00:00:00']
            ]) -> first();
            dump($schooldayId -> schoolDayId);
            if ($schooldayId == null){
                return view('attendance.addStudentAttendance')  -> with('class',$class)
//                -> with('student',$student)
                    -> with('schoolDay',$schooldayId)
                    -> with('classId',Input::get('classId'));
            }
            return view('attendance.addStudentAttendance')  -> with('class',$class)
//                -> with('student',$student)
//                -> with('classId',$id)

                -> with('schoolDay',$schooldayId)
                -> with('classId',Input::get('classId'));
        }
        return view('attendance.addStudentAttendance') -> with('class',$class);
    }
    public function attendanceSearchClass($id = null){

        $class = Classes::all();

        $student = Student::where('classes_classId',$id) -> get();



        return view('attendance.addStudentAttendance')  -> with('class',$class)
                                                        -> with('student',$student)
                                                        -> with('classId',$id);

    }
}
