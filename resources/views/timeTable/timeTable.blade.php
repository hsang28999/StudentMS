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
                            </ol>
                            <h2 style="display: inline">
                                TIME TABLE
                            </h2>
                        </div>
                        <div class="body">
                            <a href="{{route('addTimeTable')}}">
                                <button class="btn btn-success">ADD TIME TABLE</button>
                            </a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Class</th>
                                        <th>Teacher Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($classes as $key => $class)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$class->className}}</td>
                                        <td>{{$class->teacherName}}</td>
                                        <td>
                                            <a href="{{route('viewTimeTable',['id'=>$class->classId])}}" class="btn btn-small bg-lime waves-effect ">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <script>
        activeSection("timeTable");
    </script>
@endsection
