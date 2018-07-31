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
Route::get('assignment',function(){
    return view('assignment');
});
Route::get('routine',function(){
    return view('routine');
});
Route::get('subject',function(){
    return view('subject');
});
