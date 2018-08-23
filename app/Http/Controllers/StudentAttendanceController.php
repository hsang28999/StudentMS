<?php

namespace App\Http\Controllers;

use App\Classes;
use App\SchoolDay;
use App\Session;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class StudentAttendanceController extends Controller
{
    public function index(){
        $student = Student::all();
        $class = Classes::all();
        return view('attendance.studentAttendance') -> with('student',$student)
            -> with('class',$class );
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function attendance(){
//        $student = Student::all();
        $class = Classes::all();
        if (Input::has('classId')){
            $schooldayId = SchoolDay::where([
                ['classes_classId',Input::get('classId') ],
                ['dayValue',Carbon::now()-> toDateString()]
            ]) -> first();
//            dump($schooldayId -> schoolDayId);
            if ($schooldayId == null){
                return view('attendance.addStudentAttendance')  -> with('class',$class)
//                -> with('student',$student)
                    -> with('schoolDay',$schooldayId)
                    -> with('classId',Input::get('classId'));
            }else{
//                $session = Session::where('school_days_schoolDayId',$schooldayId -> classes_classId) -> get();
                $sessionWithSubject = DB::table('sessions')
                                        -> join('subjects','sessions.subjects_subjectId','=','subjectId')
                                        -> select('sessions.*','subjects.subjectName')
                                        ->where('school_days_schoolDayId',$schooldayId -> classes_classId)
                                        -> get();
                if (Input::has('classId') && Input::has('sessionId') ){

                    $student = Student::where('classes_classId',Input::has('classId')) -> get();
//                    dump($student);
                    return view('attendance.addStudentAttendance')  -> with('class',$class)
                        -> with('schoolDay',$schooldayId)
                        -> with('classId',Input::get('classId'))
                        -> with('sessionWithSubject',$sessionWithSubject)
                        -> with('student',@$student);
                }

                return view('attendance.addStudentAttendance')  -> with('class',$class)
                    -> with('schoolDay',$schooldayId)
                    -> with('classId',Input::get('classId'))
                    -> with('sessionWithSubject',$sessionWithSubject);
            }

        }
        else{
            return view('attendance.addStudentAttendance') -> with('class',$class)
                -> with('schoolDay',null)
                -> with('noSchoolDay',true);
        }

    }
    public function attendanceSearchClass($id = null){

        $class = Classes::all();

        $student = Student::where('classes_classId',$id) -> get();



        return view('attendance.addStudentAttendance')  -> with('class',$class)
                                                        -> with('student',$student)
                                                        -> with('classId',$id);

    }
    public function store(){
        dump(Input::get('data'));
    }
}
