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
                                <a href="{{route('add_teacher_attendance')}}"><button class="btn btn-success">ADD TEACHER ATTENDANCE</button>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Johnson Crusor</td>
                                            <td>ABC@gmail.com</td>
                                            <td>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="{{route('view_teacher_attendance')}}"><i class="material-icons">remove_red_eye</i></a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>                                   
                                            <td>Diana Rejex</td>
                                            <td>ABC@gmail.com</td>
                                            <td>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="{{route('view_teacher_attendance')}}"><i class="material-icons">remove_red_eye</i></a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>                              
                                            <td>Alex Panther</td>
                                            <td>ABC@gmail.com</td>
                                            <td>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="{{route('view_teacher_attendance')}}"><i class="material-icons">remove_red_eye</i></a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Loren Carlet</td>
                                            <td>ABC@gmail.com</td>
                                            <td>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="{{route('view_teacher_attendance')}}"><i class="material-icons">remove_red_eye</i></a></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</section>

	<script type="text/javascript">
		activeSection("attendance","attendance_teacher");
	</script>
@endsection