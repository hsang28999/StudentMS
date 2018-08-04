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
    'as' => 'student', function () {
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
});



Route::group(['prefix' => 'student'],function (){
    Route::group(['prefix' => 'class'],function (){
        Route::get('',[
            'as' => 'class',function() {
                return view('student.class');
            }
        ]);
        Route::get('create',[
            'as' => 'createClass',function(){
                return view('student.addClass');
            }
        ]);
    });


    Route::group(['prefix' => 'subject'],function (){
        Route::get('create',[
            'as' => 'createSubject',function(){
                return view('student.addSubject');
            }
        ]);
        Route::get('',[
            'as' => 'subject',function() {
                return view('student.subject');
            }
        ]);
    });
});

/*==============Route student=========================*/

Route::group(['prefix' => 'studentMaster'],function (){
    Route::get('/',[
        'as' => 'studentMaster',function() {
            return view('studentMaster.student');
        }
    ]);
});

Route::group(['prefix' => 'StudentAction'],function (){
    Route::get('',[
        'as' => 'addStudent',function() {
            return view('studentAction.addStudent');
        }
    ]);
});


Route::group(['prefix' => 'StudentAction'],function (){
    Route::get('edit',[
        'as' => 'editStudent',function(){
            return view('studentAction.editStudent');
        }
    ]);
    Route::get('view',[
        'as' => 'viewStudent',function() {
            return view('studentAction.viewStudent');
        }
    ]);
});

