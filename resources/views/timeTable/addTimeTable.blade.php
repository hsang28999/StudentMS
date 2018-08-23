@extends('layout')
@section('section')
    <section class="content ddmmyyyy">
        <div class="container-fluid">
            <!-- Subject Table-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <ol class="breadcrumb pull-right m-t--15">
                            </ol>

                            <h2 style="display: inline">
                                ADD TIMETABLE
                            </h2>

                        </div>
                        <div class="body" id="timeTable">

                            <div class="row">
                                <div class="col-md-3">
                                    Start At
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" id="startAt" class="form-control date" placeholder="VD: 30/07/2016">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    End At
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="text" id="endAt" class="form-control date" placeholder="VD: 30/07/2016">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    Maximum sessions per day
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">subject</i>
                                            </span>
                                        <div class="form-line">
                                            <input type="number" id="countSession" class="form-control ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    Class
                                    <select id="class-selected" class="form-control show-tick">
                                        @foreach($classes as $class)
                                            <option value="{{$class->classId}}">{{$class->className}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-7 col-md-offset-5">
                                    <button id="ok" class="btn btn-success">Continue</button>
                                </div>
                                <div class="col-md-12">
                                    <div id="list-date-button">
                                    </div>
                                    <div id="list-date-button2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# subJect Table-->

        </div>
    </section>
    <script></script>
@endsection
