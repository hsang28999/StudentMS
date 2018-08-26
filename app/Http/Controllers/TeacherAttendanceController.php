<?php

namespace App\Http\Controllers;

use App\Classes;
use App\SchoolDay;
use App\Session;
use App\Student;
use App\Teacher;
use App\TeacherAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class TeacherAttendanceController extends Controller
{
    public function index(Request $request){

        $class = Classes::all();
        $teachers = DB::table('teachers')->get();
        return view('attendance.teacherAttendance') -> with(['class'=>$class,'teachers'=>$teachers] );
    }

    public function viewTeacher($id){
        $timeTableArray = array();
        $teacher = DB::table('sessions')
            -> join('subjects','sessions.subjects_subjectId','=','subjects.subjectId')
            -> join('teachers','teachers.teacherId','=','subjects.teachers_teacherId')
            -> select('teachers.*')
            -> get();

//        $schoolDays = DB::table('school_days')
//            ->join('sessions', 'sessions.school_days_schoolDayId', '=', 'school_days.school_days_schoolDayId')
//            ->join('subjects', 'subjects.subjectId', '=', 'sessions.subjects_subjectId')
//            ->join('teachers', 'teachers.teacherId', '=', 'subjects.teacherId')
//            ->select('school_days.*')
//            ->where('teachers.teachers_teacherId', '=',$id);
//
//        foreach ($schoolDays as $schoolDay){
            $sessions = DB::table('sessions')
                ->join('subjects', 'sessions.subjects_subjectId', '=', 'subjects.subjectId')
//                ->join('teachers', 'teachers.teacherId', '=', 'subjects.teachers_teacherId')
                ->join('school_days', 'school_days.schoolDayId', '=', 'sessions.school_days_schoolDayId')
                ->join('teacher_attendances', 'teacher_attendances.sessions_sessionId', '=', 'sessions.sessionId')
                ->join('classes', 'classes.classId', '=', 'school_days.classes_classId')
                ->select('sessions.*','subjects.subjectName','school_days.dayValue','classes.className','teacher_attendances.teacherAttendanceValue')
                ->where('teacher_attendances.teachers_teacherId', '=',$id)
                ->get()->toArray();

//            if(count($sessions)>0){
//                for($j = 0;$j<count($sessions);$j++){
//                    $sessions[$j] = (array)$sessions[$j];
//                }
//                $sessionArray = array("sessions"=>$sessions,"dayValue"=>$schoolDay->dayValue);
//                array_push($timeTableArray,$sessionArray);
//            }


        return view('attendance.viewTeacherAttendance')->with(['sessions'=>$sessions]);
    }

    public function attendance(){
        $class = Classes::all();
        if (Input::has('classId')){
            $schooldayId = SchoolDay::where([
                ['classes_classId',Input::get('classId') ],
                ['dayValue',Carbon::now('Asia/Ho_Chi_Minh')-> toDateString()]
            ]) -> first();

            if ($schooldayId == null){
                return view('attendance.addTeacherAttendance')  -> with('class',$class)
                    -> with('schoolDay',$schooldayId)
                    -> with('classId',Input::get('classId'));
            }else{
                $sessionWithSubject = DB::table('sessions')
                    -> join('subjects','sessions.subjects_subjectId','=','subjects.subjectId')
                    -> join('teachers','teachers.teacherId','=','subjects.teachers_teacherId')
                    -> select('sessions.*','subjects.subjectName','teachers.teacherName','teachers.teacherId')
                    ->where('school_days_schoolDayId',$schooldayId -> schoolDayId)
                    -> get();
                $teacher = DB::table('sessions')
                    -> join('subjects','sessions.subjects_subjectId','=','subjects.subjectId')
                    -> join('teachers','teachers.teacherId','=','subjects.teachers_teacherId')
                    -> select('teachers.*','sessions.sessionId')
                    ->where('school_days_schoolDayId',$schooldayId -> schoolDayId)
                    -> get();
//                if (Input::has('classId') && Input::has('sessionId') ){
//
//                    $teacher = Teacher::where('classes_classId',Input::has('classId')) -> get();
//                    return view('attendance.addTeacherAttendance')  -> with('class',$class)
//                        -> with('schoolDay',$schooldayId)
//                        -> with('classId',Input::get('classId'))
//                        -> with('sessionWithSubject',$sessionWithSubject)
//                        -> with('teacher',$teacher)
//                        -> with('currentSessionId',Input::get('sessionId'));
//                }

                return view('attendance.addTeacherAttendance')  -> with('class',$class)
                    -> with('schoolDay',$schooldayId)
                    -> with('classId',Input::get('classId'))
                    -> with('teacher',$teacher)
                    -> with('sessionWithSubject',$sessionWithSubject);
            }

        }
        else{
            return view('attendance.addTeacherAttendance') -> with('class',$class)
                -> with('schoolDay',null)
                -> with('noSchoolDay',true);
        }

    }

    public function attendanceSearchClass($id = null){

        $class = Classes::all();

        $teacher = Teacher::where('classes_classId',$id) -> get();



        return view('attendance.addTeacherAttendance')  -> with('class',$class)
            -> with('teacher',$teacher)
            -> with('classId',$id);

    }

    public function store(){
        $JSONdata = Input::get('dataAtendance');
        $data =  json_decode($JSONdata);
        for ($i = 0; $i < count($data);$i++){
            $atendanceTeacher = new TeacherAttendance();
            $atendanceTeacher -> teacherAttendanceValue = $data[$i] -> studentAttendanceValue;
            $atendanceTeacher -> teachers_teacherId = $data[$i] -> students_studentId;
            $atendanceTeacher -> sessions_sessionId = $data[$i] -> sessionId;
            $atendanceTeacher -> save();
        }


        return $data;
    }
}
