@extends('layout')
@section('section')
	<section class="content">
	        <div class="container-fluid">

	            <!-- Example Tab -->
	            <div class="row">
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="card">
	                        <div class="body">
	                            <!-- Nav tabs -->
	                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
	                                <li role="presentation" class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
	                                <li role="presentation"><a href="#attendance1" data-toggle="tab">Attendance</a></li>
	                                <li role="presentation"><a href="#mark1" data-toggle="tab">Mark</a></li>
	                            </ul>

	                            <!-- Tab panes -->
	                            <div class="tab-content">
	                                <div role="tabpanel" class="tab-pane fade in active" id="profile">
	                                	<div class="col-xs-6">
	                                		<p>Name: {{$student[0] -> studentName}}</p>
		                                    <p>Class: {{$student[0] -> classes_classId}}</p>
		                                    <p>Date of Birth: {{$student[0] -> dateOfBirth}}</p>
		                                    <p>Gender: {{$student[0] -> gender}}</p>

	                                	</div>
	                                	<div>
	                                		<p>Phone: {{$student[0] -> phoneNumber}}</p>

		                                    <p>Email: {{$student[0] -> email}}</p>
											<p>Address: {{$student[0] -> address}}</p>
	                                	</div>
	                                </div>
	                                <div role="tabpanel" class="tab-pane fade" id="attendance1">
	                                	<div id="hide-table">

					                    </div>
	                                </div>
	                                <div role="tabpanel" class="tab-pane fade" id="mark1">
	                                    <table class="table table-bordered table-striped">
	                                    	<tbody>
										    <tr>
										   		<th rowspan="2">Subject</th>
										    	<td colspan="3">Final Exam</td>
										    	<td colspan="3">Final Exam Resit</td>
										    </tr>
										    <tr>
										      <td>Assigment</td>
										      <td>Practical</td>
										      <td>Theory</td>
										      <td>Assigment Resit</td>
										      <td>Practical Resit</td>
										      <td>Theory Resit</td>
										    </tr>
										    <tr>
										      <th scope="row">Web Application Development using PHP</th>
										      <td>10</td>
										      <td>10</td>
										      <td>10</td>
										      <td></td>
										      <td></td>
										      <td></td>
										    </tr>
										    <tr>
										      <th scope="row">Application Programming (SEM 2-AP)</th>
										      <td>10</td>
										      <td>9</td>
										      <td>10</td>
										      <td></td>
										      <td></td>
										      <td></td>
										    </tr>
										    <tr>
										      <th scope="row">Introduction to Big Data (SEM 2-IBD)</th>
										      <td>10</td>
										      <td>9</td>
										      <td>10</td>
										      <td></td>
										      <td></td>
										      <td></td>
										    </tr>
										  </tbody>
										</table>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!-- #END# Example Tab -->
	        </div>
	    </section>
	<script type="text/javascript">
        activeSection("student", "null");
    </script>
@endsection
