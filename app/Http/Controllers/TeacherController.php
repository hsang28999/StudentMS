<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Illuminate\Validation\Validator;


class TeacherController extends Controller
{
    public function create(){
    	return view('teacher.addTeacher');
    }

    public function store(Request $request){
    	$allRequest = $request->all();
    	$teacherName = $allRequest['teacherName'];
    	$joiningDate = $allRequest['joiningDate'];
    	$email = $allRequest['email'];
    	$address = $allRequest['address'];
    	$gender = $allRequest['gender'];
    	$dateOfBirth = $allRequest['dateOfBirth'];
    	$phone = $allRequest['phone'];

        $request->validate([
            'teacherName' => 'require',
            'joiningDate' => 'require',
        ]);

    	$insertData = array(
    		'teacherName' => $teacherName,
    		'joiningDate' => $joiningDate,
    		'email' => $email,
    		'address' => $address,
    		'gender' => $gender,
    		'dateOfBirth' => $dateOfBirth,
    		'phone' => $phone,
    	);

    	$teacher = new Teacher();
    	$teacher->insert($insertData);

        return redirect()->action('TeacherController@index');
    }

    public function index(){
    	$tc = new Teacher();
        $allTeachers = $tc->all()->toArray();

        return view('teacher.teacher')->with('allTeachers', $allTeachers);
    }

    public function view(Request $req){
    	$teacher = Teacher::where('teacherId', $req->teacherId)->first();
    	return view('teacher.viewTeacher', compact('teacher'));
    }

    public function edit($teacherId){
        $editById = Teacher::where('teacherId',$teacherId)->first();

        return view('teacher.editTeacher')->with('editById', $editById);
    }

    public function update(Request $request,$teacherId){

        $allRequest = $request->all();
        $teacherId = $allRequest['teacherId'];	
        $teacherName = $allRequest['teacherName'];
    	$joiningDate = $allRequest['joiningDate'];
    	$dateOfBirth = $allRequest['dateOfBirth'];
    	$gender = $allRequest['gender'];
    	$email = $allRequest['email'];
    	$phone = $allRequest['phone'];
    	$address = $allRequest['address'];
        

        $teacher = new Teacher();
        $editById = $teacher->find($teacherId);
        $editById->teacherName = $teacherName;
        $editById->joiningDate = $joiningDate;
        $editById->dateOfBirth = $dateOfBirth;
        $editById->gender = $gender;
        $editById->email= $email;
        $editById->phone = $phone;
        $editById->address = $address;
        $editById->save();

        return redirect()->action('TeacherController@index');
    }

    public function delete($teacherId){
        Teacher::where('teacherId',$teacherId)->delete();

        return redirect()->action('TeacherController@index');
    }
}
