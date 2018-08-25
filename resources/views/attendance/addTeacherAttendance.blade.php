@extends('layout')
@section('section')
    <section class="content yyyymmdd">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="display: inline">
                                ADD TEACHER ATTENDANCE
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
                            {{ csrf_field() }}
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control date" placeholder="Please choose a date...">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        
                                        <button type="button" class="btn bg-teal waves-effect" data-target="#show" data-toggle="collapse">Attendance</button>
                                        
                                        <div id="show" class="collapse col-xs-12"">
                                            <table style="width: 100%;" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">ID</th>
                                                            <th rowspan="2">TeacherName</th>
                                                            <th rowspan="2">Email</th>
                                                            <th colspan="3">Attendance</th>
                                                        </tr>
                                                        <tr name="attendance">
                                                            <th value="1">P</th>
                                                            <th value="2">PA</th>
                                                            <th value="3">A</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Johnson Crusor</td>
                                                            <td>ABC@gmail.com</td>
                                                            
                                                                <th>    
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender1" id="1" class="with-gap">
                                                                    <label for="1"></label>
                                                                </div>
                                                                </th>

                                                                <th>    
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender1" id="2" class="with-gap">
                                                                    <label for="2"></label>
                                                                </div>
                                                                </th>

                                                                <th>    
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender1" id="3" class="with-gap">
                                                                    <label for="3"></label>
                                                                </div>
                                                                </th>

                                                                

                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Abebe</td>
                                                            <td>ABC@gmail.com</td>
                                                            
                                                                <th>    
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender2" id="present" class="with-gap">
                                                                    <label for="present"></label>
                                                                </div>
                                                                </th>

                                                                <th>    
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender2" id="present_absent" class="with-gap">
                                                                    <label for="present_absent"></label>
                                                                </div>
                                                                </th>

                                                                <th>    
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender2" id="absent" class="with-gap">
                                                                    <label for="absent"></label>
                                                                </div>
                                                                </th>
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