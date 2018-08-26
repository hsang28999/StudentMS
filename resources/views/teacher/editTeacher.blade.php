@extends('layout')
@section('section')
	<section class="content yyyymmdd">
        <div class="container-fluid">
            <!--Breadcrumbs-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <ol class="breadcrumb pull-right m-t--15">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fas fa-briefcase"></i> Teacher
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">remove_red_eye</i> View
                                    </a>
                                </li>
                            </ol>
                            <h2>
                                EDIT TEACHER
                            </h2>
                        </div>
            <!--#END# Breadcrumbs-->           
                        <div class="body container-fluid">         
                            <form action="{{URL::action('TeacherController@update',['teacherId' => $editById->teacherId])}}" method="Post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="teacherId" value="{{old('teacherId', $editById['teacherId'])}}">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Teacher Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="name" name="teacherName" value="{{old('teacherName', $editById['teacherName'])}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Joining Date</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="yyyy/mm/dd" name="joiningDate" value="{{old('joiningDate', $editById['joiningDate'])}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Date of Birth</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="yyyy/mm/dd" name="dateOfBirth" value="{{old('dateOfBirth', $editById['dateOfBirth'])}}">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Gender</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select  class="form-control show-tick" name="gender">
                                                    <option value="">-- Please select --</option>
                                                    <option value="1" @if(($editById -> gender) == 1) selected @endif>Male</option>
                                                    <option value="0" @if(($editById -> gender) == 0) selected @endif >Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Email </label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="abc@example.com" name="email" value="{{old('email', $editById['email'])}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Phone</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="eg: 01282375119" name="phone" value="{{old('phone', $editById['phone'])}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Address</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="8A - Tôn Thất Thuyết - Mỹ Đình 2- Cầu Giấy - Hà Nội" name="address" value="{{old('address', $editById['address'])}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                            </form>                                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        activeSection("teacher", "null");
    </script>
@endsection