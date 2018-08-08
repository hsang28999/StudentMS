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

/*==============Route student=========================*/

Route::group(['prefix' => 'student'],function (){
    Route::get('/',[
        'as' => 'student',function() {
            return view('student.student');
        }
    ]);
    Route::get('/add',[
        'as' => 'addStudent',function() {
            return view('student.addStudent');
        }
    ]);
    Route::get('/edit',[
        'as' => 'editStudent',function(){
            return view('student.editStudent');
        }
    ]);
    Route::get('/view',[
        'as' => 'viewStudent',function() {
            return view('student.viewStudent');
        }
    ]);
});

