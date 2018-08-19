<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subject = Subject::all();

        return view('academic.subject')-> with('subject',$subject);
    }
    public function  add(){
        return view('academic.addSubject');
    }
}
