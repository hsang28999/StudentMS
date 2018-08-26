<?php

namespace App\Http\Controllers;

use App\Classes;
use App\SchoolDay;
use App\Session;
use App\Student;
use App\StudentAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class StudentAttendanceController extends Controller
{
    public function index(Request $request){

        $class = Classes::all();
        $student = DB::table('students')
            ->join('classes', 'classes.classId', '=', 'students.classes_classId')
            ->select('students.*','classes.className')
            ->where('classes.classId', '=',$request->class)
            ->get();
        return view('attendance.studentAttendance') -> with(['class'=>$class,'student'=>$student] );
    }

    public function viewStudent($id){
        $timeTableArray = array();
        $student = DB::table('students')->where('studentId',$id)->first();

        $schoolDays = SchoolDay::where('classes_classId',$student->classes_classId)->get();
        foreach ($schoolDays as $schoolDay){
            $sessions = DB::table('sessions')
                ->join('subjects', 'sessions.subjects_subjectId', '=', 'subjects.subjectId')
                ->join('student_attendances', 'student_attendances.sessions_sessionId', '=', 'sessions.sessionId')
                ->select('sessions.*','subjects.subjectName','student_attendances.studentAttendanceValue')
                ->where('sessions.school_days_schoolDayId', '=',$schoolDay->schoolDayId)
                ->where('student_attendances.students_studentId', '=',$id)
                ->get()->toArray();
            if(count($sessions)>0){
                for($j = 0;$j<count($sessions);$j++){
                    $sessions[$j] = (array)$sessions[$j];
                }
                $sessionArray = array("sessions"=>$sessions,"dayValue"=>$schoolDay->dayValue);
                array_push($timeTableArray,$sessionArray);
            }
        }

        return view('attendance.viewStudentAttendance')->with(['timeTable'=>$timeTableArray]);
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
                ['dayValue',Carbon::now('Asia/Ho_Chi_Minh')-> toDateString()]
            ]) -> first();

            if ($schooldayId == null){
                return view('attendance.addStudentAttendance')  -> with('class',$class)
//                -> with('student',$student)
                    -> with('schoolDay',$schooldayId)
                    -> with('classId',Input::get('classId'));
            }else{
//                $session = Session::where('school_days_schoolDayId',$schooldayId -> classes_classId) -> get();
                $sessionWithSubject = DB::table('sessions')
                                        -> join('subjects','sessions.subjects_subjectId','=','subjects.subjectId')
                                        -> select('sessions.*','subjects.subjectName')
                                        ->where('school_days_schoolDayId',$schooldayId -> schoolDayId)
                                        -> get();
                if (Input::has('classId') && Input::has('sessionId') ){

                    $student = Student::where('classes_classId',Input::has('classId')) -> get();
//                    dump($student);
                    return view('attendance.addStudentAttendance')  -> with('class',$class)
                        -> with('schoolDay',$schooldayId)
                        -> with('classId',Input::get('classId'))
                        -> with('sessionWithSubject',$sessionWithSubject)
                        -> with('student',$student)
                        -> with('currentSessionId',Input::get('sessionId'));
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
        $JSONdata = Input::get('dataAtendance');
        $data =  json_decode($JSONdata);
        $sessionId = Input::get('seasionId');
        for ($i = 0; $i < count($data);$i++){
            $atendanceStudent = new StudentAttendance();
            $atendanceStudent -> studentAttendanceValue = $data[$i] -> studentAttendanceValue;
            $atendanceStudent -> students_studentId = $data[$i] -> students_studentId;
            $atendanceStudent -> sessions_sessionId = $sessionId;
            $atendanceStudent -> save();
        }


        return $data;
    }
}
