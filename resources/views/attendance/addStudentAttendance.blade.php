@extends('layout')
@section('section')
	<section class="content">
	    <div class="container-fluid">
	        <!-- Exportable Table -->
	        <div class="row clearfix">
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <div class="card">
	                    <div class="header">
	                        <h2 style="display: inline">
	                            ADD STUDENT ATTENDANCE
	                        </h2>
                            <ol class="breadcrumb pull-right m-t--15">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fas fa-users"></i> Student Attendance
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">remove_red_eye</i> Add
                                    </a>
                                </li>
                            </ol>
	                    </div>
                        <form method="POST">
	                        <div class="body">
                                <div class="row clearfix ddmmyyyyy">
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" id="classLabel" >
                                            <option value="">-- Please select class --</option>
                                            @foreach($class as $classItem)
                                            <option value="{{$classItem -> classId}}" @if(isset($classId) && $classItem -> classId == $classId) selected @endif>{{$classItem -> className}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input disabled value="{{\Carbon\Carbon::now()->toDateString()}}" type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">

                                        <select class="form-control show-tick" id="sessionLabel">

                                            @if($schoolDay == null)
                                                <option value="">No Lession Today</option>
                                            @else
                                            <option value="">-- Please select session --</option>
                                            @foreach($class as $classItem)
                                                <option value="{{$classItem -> classId}}" @if(isset($classId) && $classItem -> classId == $classId) selected @endif>{{$classItem -> className}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div>
                                        <button type="button" class="btn bg-teal waves-effect" data-target="" data-toggle="collapse" id="searchBtn">Attendance</button>
                                        <div id="show" class="collapse col-xs-12 in">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Student Code</th>
                                                            <th>Attendance</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                    @if(isset($student))
                                                    @foreach($student as $studentItem)
                                                        <tr>
                                                            <td>{{$studentItem -> studentId}}</td>
                                                            <td>{{$studentItem -> studentName}}</td>
                                                            <td>{{$studentItem -> classes_classId}}</td>
                                                            <td>{{$studentItem -> studentCode}}</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender" id="present" class="with-gap">
                                                                    <label for="present">Present</label>
                                                                    <input type="radio" name="gender" id="absent" class="with-gap">
                                                                    <label for="absent" class="m-l-20">Absent</label>
                                                                    <input type="radio" name="gender" id="p_absent" class="with-gap">
                                                                    <label for="p_absent" class="m-l-20">P_Absent</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    @endif
                                                    </tbody>
                                                </table>
                                                <button class="btn btn-success pull-right">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

<script>
    activeSection("attendance","attendance_student");
</script>
<Script src="{{asset('js/studentAttendance.js')}}"></Script>
@endsection