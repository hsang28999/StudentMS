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
                                        <i class="fas fa-user-tie"></i> Teacher Attendance
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
                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn bg-teal waves-effect" data-target="#show" data-toggle="collapse">Attendance</button>
                                        <div id="show" class="collapse col-xs-12"">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Attendance</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Johnson Crusor</td>
                                                            <td>ABC@gmail.com</td>
                                                            <td>    
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender" id="present" class="with-gap">
                                                                    <label for="present">Present</label>
                                                                    <input type="radio" name="gender" id="absent" class="with-gap">
                                                                    <label for="absent" class="m-l-20">Absent</label>
                                                                </div>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Diana Rejex</td>
                                                            <td>ABC@gmail.com</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender" id="present" class="with-gap">
                                                                    <label for="present">Present</label>
                                                                    <input type="radio" name="gender" id="absent" class="with-gap">
                                                                    <label for="absent" class="m-l-20">Absent</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>             
                                                            <td>Alex Panther</td>
                                                            <td>ABC@gmail.com</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender" id="present" class="with-gap">
                                                                    <label for="present">Present</label>
                                                                    <input type="radio" name="gender" id="absent" class="with-gap">
                                                                    <label for="absent" class="m-l-20">Absent</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Loren Carlet</td>
                                                            <td>ABC@gmail.com</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender" id="present" class="with-gap">
                                                                    <label for="present">Present</label>
                                                                    <input type="radio" name="gender" id="absent" class="with-gap">
                                                                    <label for="absent" class="m-l-20">Absent</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button class="btn btn-success pull-right">Submit</button>
                                            </div>
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
    activeSection("attendance","attendance_teacher");
</script>
@endsection