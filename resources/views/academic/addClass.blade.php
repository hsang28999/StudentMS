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
                                ADD CLASS
                            </h2>
                        </div>
                        <div class="body">
                            <form method="POST" action="{{URL::action('ClassController@store')}}">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row clearfix">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                        <label for="">Class Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="" class="form-control" placeholder="EX: T1707A" name="className">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                        <label for="">Teacher Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <div class="form-group">
                                            <select class="show-tick" name="teachers_teacherId">
                                                <option value="">-- Select Teacher --</option>
                                                @foreach(App\Teacher::pluck('teacherName','teacherId')->all() as $key=>$val)
                                                <option value="{{$key}}">{{$val}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">ADD</button>
                                <!-- <button type="button" class="btn btn-danger m-t-15 waves-effect">LEAVE</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# class Table-->
        </div>
    </section>
    <script>
        activeSection("academic","academic_class");
    </script>
@endsection
