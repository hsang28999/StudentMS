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

/*==========================ROUTE TEACHER================================================*/

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

/*=========================ROUTE ACADEMIC=====================================*/

Route::group(['prefix' => 'academic'],function (){

    Route::group(['prefix' => 'academic_class'],function (){
        Route::get('',[
            'as' => 'class',
            'uses' => 'ClassController@index'
        ]);
        Route::get('/add',[
            'as' => 'addClass',
            'uses' => 'ClassController@create'
        ]);
        Route::post('/add', 'ClassController@store');

        Route::get('/{classId}/edit',[
            'as' => 'editClass',
            'uses' => 'ClassController@edit'
        ]);
        Route::post('/{classId}/edit', 'ClassController@update');

        Route::get('/{classId}/delete', 'ClassController@delete');
    });


    Route::group(['prefix' => 'academic_subject'],function (){
        Route::get('create',[
            'as' => 'createSubject',
            'uses' => 'SubjectController@add'

        ]);
        Route::get('',[
            'as' => 'subject',
            'uses' => 'SubjectController@index'

        ]);
        Route::get('edit',[
            'as' => 'editSubject',
            'uses' => 'SubjectController@edit'
        ]);
        Route::post('create',[
            'as' => 'storeSubject',
            'uses' => 'SubjectController@store'

        ]);
        Route::post('edit',[
            'as' => 'updateSubject',
            'uses' => 'SubjectController@update'

        ]);
        Route::post('delete',[
            'as' => 'deleteSubject',
            'uses' => 'SubjectController@delete'
        ]);
    });
});

Route::group(['prefix'=> 'mark'],function(){
    Route::get('',[
        'as' => 'mark',
        'uses' => 'MarkController@index'
    ]);
    Route::get('add',[
        'as' => 'addMark',
        'uses' => 'MarkController@create'
    ]);

    Route::post('add', 'MarkController@store');

    Route::get('view',['as' => 'viewMark',function (){
        return view('mark.viewMark');
    }]);
});

/*=========================ROUTE STUDENT=======================================*/

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
    Route::post('/add',[
        'as' => 'addStudent',
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


/*=====================================ROUTE ATTENDANCE==============================*/

Route::group(['prefix' => 'attendance'],function (){

    Route::group(['prefix' => 'attendance_student'],function (){
        Route::get('',[
            'as' => 'attendance_student',
            'uses' => 'StudentAttendanceController@index'
        ]);
        Route::get('attendance',[
            'as' => 'add_attendance_student',
            'uses' => 'StudentAttendanceController@attendance'
        ]);
        Route::post('attendance',[
            'as' => 'storeAtendance',
            'uses' => 'StudentAttendanceController@store'
        ]);
        Route::get('view/{id}',[
            'as' => 'view_attendance_student',
            'uses' => 'StudentAttendanceController@viewStudent'
        ]);
    });


    Route::group(['prefix' => 'attendance_teacher'],function (){
        Route::get('',[
            'as' => 'attendance_teacher',
            'uses' => 'TeacherAttendanceController@index'
        ]);
        Route::get('attendance',[
            'as' => 'add_attendance_teacher',
            'uses' => 'TeacherAttendanceController@attendance'
        ]);
        Route::post('attendance',[
            'as' => 'storeAtendance',
            'uses' => 'TeacherAttendanceController@store'
        ]);
        Route::get('view/{id}',[
            'as' => 'view_attendance_teacher',
            'uses' => 'TeacherAttendanceController@viewTeacher'
        ]);
    });
});

Route::group(['prefix' => 'timeTable'],function (){
    Route::get('/getSubjects','TimeTableController@getSubjects');
    Route::get('/',[
        'as' => 'timeTable','uses'=>'TimeTableController@getClass'
    ]);
    Route::post('/addTimetable','TimeTableController@saveTimeTableToDb');
    Route::get('/view/{id}',[
        'as' => 'viewTimeTable','uses'=>'TimeTableController@viewTimeTable'
    ]);
    Route::get('/add',[
        'as' => 'addTimeTable','uses'=>'TimeTableController@getTimeTable'
     ]);
});

Route::get('/test','TimeTableController@saveTimeTableToDb');
