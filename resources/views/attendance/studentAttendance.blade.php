@extends('layout')
@section('section')
	<section class="content">
	    <div class="container-fluid">
	        <!-- Exportable Table -->
	        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                STUDENT ATTENDANCE
                            </h2>

                        </div>
                        <div class="body">
                            <a href="{{route('add_attendance_student')}}">
                                <button class="btn btn-success"> STUDENT ATTENDANCE</button>
                            </a>
                            <form id="submit" method="get" action="">
                                    <select class="mdb-select" name="class">
                                        <option value="" disabled selected>Select Class</option>
                                        @foreach($class as $classItem)
                                            <option value="{{$classItem -> classId}}" @if($classItem -> classId == app('request')->input('class')) selected @endif> {{$classItem -> className}}</option>
                                        @endforeach
                                    </select>
                                <button class="btn bg-deep-purple waves-effect" type="submit">Find</button>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($student as $key => $studentItem)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$studentItem -> studentName}}</td>
                                            <td>{{$studentItem -> className}}</td>
                                            <td>{{$studentItem -> email}}</td>
                                            <td>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="{{route('view_attendance_student',['id'=>$studentItem -> studentId])}}"><i class="material-icons">remove_red_eye</i></a></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</section>

<script>
    activeSection("attendance","attendance_student");
</script>
@endsection
