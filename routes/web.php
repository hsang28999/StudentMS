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
        'as' => 'teacher',
        'uses' => 'TeacherController@index'
    ]);

    Route::get('/{teacherId}/view',[
        'as' => 'viewTeacher',
        'uses' => 'TeacherController@view'
    ]);

    Route::get('/{teacherId}/edit',[
        'as' => 'editTeacher',
        'uses' => 'TeacherController@edit'
    ]);
    Route::post('/{teacherId}/update', 'TeacherController@update');

    Route::get('/add',[
        'as' => 'addTeacher',
        'uses' => 'TeacherController@create'
    ]);
    Route::post('/add','TeacherController@store');

    Route::get('/{teacherId}/delete', 'TeacherController@delete');
});

/*==============================================================*/

Route::group(['prefix' => 'academic'],function (){
    Route::group(['prefix' => 'academic_class'],function (){
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


    Route::group(['prefix' => 'academic_subject'],function (){
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
    Route::post('/delete/{id}',[
        'as' => 'deleteStudent',
        'uses' => 'StudentController@delete'
    ]);

});


/*==================ROUTE ATTENDANCE==============================*/

Route::group(['prefix' => 'attendance'],function (){

    Route::group(['prefix' => 'attendance_student'],function (){
        Route::get('',[
            'as' => 'attendance_student',function() {
                return view('attendance.studentAttendance');
            }
        ]);
        Route::get('create',[
            'as' => 'add_attendance_student',function(){
                return view('attendance.addStudentAttendance');
            }
        ]);
        Route::get('view',[
            'as' => 'view_attendance_student',function(){
                return view('attendance.viewStudentAttendance');
            }
        ]);
    });


    Route::group(['prefix' => 'attendance_teacher'],function (){
        Route::get('',[
            'as' => 'attendance_teacher',function() {
                return view('attendance.teacherAttendance');
            }
        ]);
        Route::get('create',[
            'as' => 'add_attendance_teacher',function(){
                return view('attendance.addTeacherAttendance');
            }
        ]);
        Route::get('view',[
            'as' => 'view_attendance_teacher',function(){
                return view('attendance.viewTeacherAttendance');
            }
        ]);
    });
});

Route::get('/test','TimeTableController@test');

Route::group(['prefix' => 'timeTable'],function (){
    Route::get('/getSubjects','TimeTableController@getSubjects');
    Route::get('/',[
        'as' => 'timeTable','uses'=>'TimeTableController@getTimeTable'
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

