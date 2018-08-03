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
Route::get('/teacher',[
    'as' => 'teacher', function () {
        return view('welcome');
    }
]);
Route::get('/1',function(){
    return 1;
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
