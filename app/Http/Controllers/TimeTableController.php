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

    public function getTimeTable(){
        $classes = DB::table('classes')->get();
        $subjects = Subject::all();
        return view('timeTable.timeTable')->with(['classes'=>$classes,'subjects'=>$subjects]);
    }

    public function test(){
        $timeTables = '{"class":"1","timeTable":[{"dayValue":"2012/12/12","sessions":[{"index":"1","subjectId":"3"}]},{"dayValue":"2012/12/13","sessions":[{"index":"1","subjectId":"3"}]}]}';
        $timeTable = json_decode($timeTables, true);
        for ($i=0;$i<count($timeTable['timeTable']);$i++){
            $tables = $timeTable['timeTable'][0];
            $schoolDays = new SchoolDay();
            $schoolDays->dayValue = $tables['dayValue'];
            $schoolDays->classes_classId = $timeTable['class'];
            $schoolDays->save();
            $schoolDay = SchoolDay::Where('dayValue',$tables['dayValue'])->first();
            for ($j=0;$j<count($tables['sessions']);$j++){
                $table = $tables['sessions'][$j];
                $session = new Session();
                $session-> sessionOrder = $table['index'];
                $session-> school_days_schoolDayId = $schoolDay->schoolDayId;
                $session-> subjects_subjectId = $table['subjectId'];
                $session->save();
            }
        };
        dd($timeTable);
    }

    public function saveTimeTableToDb(Request $request)
    {
        $timeTable = json_decode($request->timeTable, true);

//        for ($i = 0; $i < count($timeTable['timeTable']); $i++) {
//            $tables = $timeTable['timeTable'][0];
//            $schoolDays = new SchoolDay();
//            $schoolDays->dayValue = $tables['dayValue'];
//            $schoolDays->classes_classId = $timeTable['class'];
//            $schoolDays->save();
//            $schoolDay = SchoolDay::Where('dayValue', $tables['dayValue'])->first();
//            for ($j = 0; $j < count($tables['sessions']); $j++) {
//                $table = $tables['sessions'][$j];
//                $session = new Session();
//                $session->sessionOrder = $table['index'];
//                $session->school_days_schoolDayId = $schoolDay->schoolDayId;
//                $session->subjects_subjectId = $table['subjectId'];
//                $session->save();
//            }
//        }
        return response($timeTable);
    }

}
