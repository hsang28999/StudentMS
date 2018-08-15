<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolDay;
use App\Subject;
use App\Session;

class TimeTableController extends Controller
{
    public function saveTimeTableToDb(Request $request){
        $timeTable = json_decode($request->timeTable, true);
//        for ($i=0;$i<count($timeTable['timeTable']);$i++){
//            $tables = $timeTable['timeTable'][$i];
//            $schoolDays = new SchoolDay();
//            $schoolDays->dayValue = $tables['dayValue'];
//            $schoolDays->classes_classId = $timeTable['class'];
//            $schoolDays.save();
//            $schoolDay = SchoolDay::Where('dayValue',$tables['dayValue'])->first();
//            for ($j=0;$j<count($tables['sessions']);$j++){
//                $table = $tables['sessions'][$j];
//                $session = new Session();
//                $session-> sessionOrder = $table['index'];
//                $session-> school_days_schoolDayId = $schoolDay->schoolDayId;
//                $session-> subjects_subjectId = $table['subjectId'];
//                $session->save();
//            }
//        }

        return response($timeTable);

//        $response = array(
//            'status' => 'success',
//            'timetable' => $timeTable['class'],
//        );
//        return response()->json($response);
    }
}
