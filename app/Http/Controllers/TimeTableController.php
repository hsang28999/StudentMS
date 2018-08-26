<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SchoolDay;
use App\Subject;
use App\Session;
use App\Teacher;

class TimeTableController extends Controller
{
    public function getSubjects(){
        $subjects = DB::table('subjects')
            ->join('teachers', 'subjects.teachers_teacherId', '=', 'teachers.teacherId')
            ->select('subjects.*','teachers.teacherName')
            ->get();
        return response()->json($subjects);
    }

    public function getClass(){
        $classes = DB::table('classes')
            ->join('teachers', 'classes.teachers_teacherId', '=', 'teachers.teacherId')
            ->select('classes.*','teachers.teacherName')
            ->get();
        return view('timeTable.timeTable')->with(['classes'=>$classes]);
    }

    public function viewTimeTable($id){
        $timeTableArray = array();
        $schoolDays = SchoolDay::where('classes_classId',$id)->get();
        foreach ($schoolDays as $schoolDay){
            $sessions = DB::table('sessions')
                ->join('subjects', 'sessions.subjects_subjectId', '=', 'subjects.subjectId')
                ->select('sessions.*','subjects.subjectName')
                ->where('sessions.school_days_schoolDayId',$schoolDay->schoolDayId)
                ->get()->toArray();
                for($j = 0;$j<count($sessions);$j++){
                    $sessions[$j] = (array)$sessions[$j];
                }
                $sessionArray = array("sessions"=>$sessions,"dayValue"=>$schoolDay->dayValue);
                array_push($timeTableArray,$sessionArray);
        }
        return view('timeTable.viewTimeTable')->with(['timeTable'=>$timeTableArray]);
    }

    public function getTimeTable(){
        $classes = DB::table('classes')->get();
        $subjects = Subject::all();return view('timeTable.addTimeTable')->with(['classes'=>$classes,'subjects'=>$subjects]);

    }

    public function saveTimeTableToDb(Request $request)
    {
        $timeTable = json_decode($request->timeTable, true);
        for ($i = 0; $i < count($timeTable['timeTable']); $i++) {
            $tables = $timeTable['timeTable'][$i];
//            $checkSchoolDay = SchoolDay::Where([['dayValue', $tables['dayValue'] ],['classes_classId', $timeTable['class']]])->get();
//            if(count($checkSchoolDay) != 0){
//                foreach ($checkSchoolDay as $scd) {
//                    $scd->delete();
//                }
//            }
            $schoolDays = new SchoolDay();
            $schoolDays->dayValue = $tables['dayValue'];
            $schoolDays->classes_classId = $timeTable['class'];
            $schoolDays->save();
            $schoolDay = SchoolDay::Where('schoolDayId', $schoolDays->id)->first();
            for ($j = 0; $j < count($tables['sessions']); $j++) {
                $table = $tables['sessions'][$j];
                $session = new Session();
                $session->sessionOrder = $table['index'];
                $session->school_days_schoolDayId = $schoolDay->schoolDayId;
                $session->subjects_subjectId = $table['subjectId'];
                $session->save();
            }
        }
        return response($timeTable);
    }

}
