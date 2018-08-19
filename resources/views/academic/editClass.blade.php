@extends('layout')
@section('section')
    <section class="content">
        <div class="container-fluid">
            <!-- Class Table-->
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
                                EDIT CLASS
                            </h2>
                        </div>
                        <div class="body">
                            <form action="" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="" class="form-control" name="className" value="{{$class -> className}}">
                                        <label class="form-label" >Class Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <label for="">Teacher Name</label>
                                    <select class="form-control show-tick" value="" name="teachers_teacherId"> 
                                        @foreach($teacher as $tch)
                                            <option value="{{$tch -> teacherId}}" @if($tch -> teacherId == $class -> teachers_teacherId)selected @endif>{{$tch -> teacherName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>

                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        activeSection("academic","academic_class");
    </script>
@endsection
