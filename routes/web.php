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
    });
});
