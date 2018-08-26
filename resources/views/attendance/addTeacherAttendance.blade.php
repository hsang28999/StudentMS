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
                                ADD TEACHER ATTENDANCE
                            </h2>
                            <ol class="breadcrumb pull-right m-t--15">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fas fa-users"></i> Teacher Attendance
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
                                                <input disabled value="{{\Carbon\Carbon::now('Asia/Ho_Chi_Minh') -> toDateString()}}" type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        {{--<button type="button" class="btn bg-teal waves-effect" data-target="" data-toggle="collapse" id="searchBtn">Attendance</button>--}}
                                        <div id="show" class="collapse col-xs-12 in">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone Number</th>
                                                    <th>Attendance</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @if(isset($teacher))
                                                    @foreach($teacher as $key => $teachertItem)
                                                        <tr>
                                                            <td>{{$key+1}}</td>
                                                            <td>{{$teachertItem -> teacherName}}</td>
                                                            <td>{{$teachertItem -> email}}</td>
                                                            <td>{{$teachertItem -> phone}}</td>
                                                            <td>
                                                                <div class="form-group" id="atendanceCheckBox">
                                                                    <input value="1" type="radio" name="{{$teachertItem -> teacherId}}" title="{{$teachertItem -> sessionId}}" id="present_{{$teachertItem -> teacherId}}" class="with-gap attendanceCheck">
                                                                    <label for="present_{{$teachertItem -> teacherId}}">Present</label>
                                                                    <input value="0" type="radio" name="{{$teachertItem -> teacherId}}" title="{{$teachertItem -> sessionId}}" id="absent_{{$teachertItem -> teacherId}}" class="with-gap attendanceCheck" checked>
                                                                    <label for="absent_{{$teachertItem -> teacherId}}" class="m-l-20">Absent</label>
                                                                    <input value="2" type="radio" name="{{$teachertItem -> teacherId}}" title="{{$teachertItem -> sessionId}}" id="p_absent_{{$teachertItem -> teacherId}}" class="with-gap attendanceCheck" >
                                                                    <label for="p_absent_{{$teachertItem -> teacherId}}" class="m-l-20">P_Absent</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-success pull-right" id="submitBtn">Submit</button>
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
    <Script src="{{asset('js/studentAttendance.js')}}"></Script>
@endsection
