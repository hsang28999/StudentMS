@extends('layout')
@section('section')
	<section class="content">
	        <div class="container-fluid">
	            <div class="bc-icons-2">
	                <ol class="breadcrumb indigo lighten-4">
	                    <li class="breadcrumb-item"><a class="black-text" href="../../../index.html">Home</a><i class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>
	                    <li class="breadcrumb-item"><a class="black-text" href="../student.html">Student</a><i class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>
	                    <li class="breadcrumb-item active"><a class="black-text" href="#">Student View</a><i class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>      
	                </ol>
	            </div>
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
	                                		<p>Name: Johnson Crusor</p>
		                                    <p>Class: T1707A</p>
		                                    <p>Date of Birth: 01/06/1999</p>
		                                    <p>Gender: Male</p>
		                                    <p>Address: Mirpur,Dhaka,Bangladesh</p>
	                                	</div>
	                                	<div>
	                                		<p>Phone: 0128 235 5119</p>
		                                    <p>Country: HaNoi</p>
		                                    <p>Religion: No</p>
		                                    <p>Email: abc@gmail.com</p>
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