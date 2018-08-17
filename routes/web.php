<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\Controller;

Route::get('/',[
    'as' => 'index', function () {
        return view('layout');
    }
]);
Route::group(['prefix' => 'teacher'],function (){
    Route::get('/',[
        'as' => 'teacher',function() {
            return view('teacher.teacher');
        }
    ]);
    Route::get('/view',[
        'as' => 'viewTeacher',function(){
            return view('teacher.teacher_detail');
        }
    ]);
    Route::get('/add',[
        'as' => 'addTeacher',function(){
            return view('teacher.addTeacher');
        }
    ]);
});



Route::group(['prefix' => 'academic'],function (){
    Route::group(['prefix' => 'class'],function (){
        Route::get('',[
            'as' => 'class',function() {
                return view('academic.class');
            }
        ]);
        Route::get('create',[
            'as' => 'createClass',function(){
                return view('academic.addClass');
            }
        ]);
        Route::get('edit/{id}',[
            'as' => 'editClass',function(){
                return view('academic.editClass');
            }
        ]);
    });


    Route::group(['prefix' => 'subject'],function (){
        Route::get('create',[
            'as' => 'createSubject',function(){
                return view('academic.addSubject');
            }
        ]);
        Route::get('',[
            'as' => 'subject',function() {
                return view('academic.subject');
            }
        ]);
        Route::get('edit/{id}',[
            'as' => 'editSubject',function(){
                return view('academic.editSubject');
            }
        ]);
    });
});

Route::group(['prefix'=> 'mark'],function(){
    Route::get('',['as' => 'mark',function (){
        return view('mark.mark');
    }]);
    Route::get('create',['as' => 'addMark',function (){
        return view('mark.addmark');
    }]);
    Route::get('view',['as' => 'viewMark',function (){
        return view('mark.mark_detail');
    }]);
});

/*==============ROUTE STUDENT=========================*/

Route::group(['prefix' => 'student'],function (){
    Route::get('/',[
        'as' => 'student',
        'uses' => 'StudentController@index'
    ]);
    Route::get('class/{id}',[
        'as' => 'studentByClass',
        'uses' => 'StudentController@searchStudentByClass'
    ]);
    Route::get('/add',[
        'as' => 'addStudent',
        'uses' => 'StudentController@add'
    ]);
    Route::post('/add',['as' => 'addStudent',
                        'uses' => 'StudentController@store']);
    Route::get('/edit/{id}',[
        'as' => 'editStudent',
        'uses' => 'StudentController@edit'
    ]);
    Route::post('/edit/{id}',[
        'as' => 'updateStudent',
        'uses' => 'StudentController@update'
    ]);
    Route::get('/view/{id}',[
        'as' => 'viewStudent',
        'uses' => 'StudentController@viewStudent'
    ]);

});


/*==================ROUTE ATTENDANCE==============================*/

Route::group(['prefix' => 'attendance'],function (){

    Route::group(['prefix' => 'student_attendance'],function (){
        Route::get('',[
            'as' => 'student_attendance',function() {
                return view('attendance.studentAttendance');
            }
        ]);
        Route::get('create',[
            'as' => 'add_student_attendance',function(){
                return view('attendance.addStudentAttendance');
            }
        ]);
        Route::get('view',[
            'as' => 'view_student_attendance',function(){
                return view('attendance.viewStudentAttendance');
            }
        ]);
    });


    Route::group(['prefix' => 'teacher_attendance'],function (){
        Route::get('',[
            'as' => 'teacher_attendance',function() {
                return view('attendance.teacherAttendance');
            }
        ]);
        Route::get('create',[
            'as' => 'add_teacher_attendance',function(){
                return view('attendance.addTeacherAttendance');
            }
        ]);
        Route::get('view',[
            'as' => 'view_teacher_attendance',function(){
                return view('attendance.viewTeacherAttendance');
            }
        ]);
    });
});

Route::group(['prefix' => 'timeTable'],function (){
    Route::get('/',[
        'as' => 'timeTable',function() {
            return view('timeTable.timeTable');
        }
    ]);
    Route::post('/','TimeTableController@saveTimeTableToDb');
    Route::get('/view',[
        'as' => 'viewTimeTable',function(){
            return view('timeTable.timeTable_detail');
        }
    ]);
    Route::get('/add',[
        'as' => 'addTimeTable',function(){
            return view('timeTable.addTimeTable');
        }
    ]);
});

