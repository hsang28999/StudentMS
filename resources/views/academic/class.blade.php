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
                            TEACHER DETAIL
                        </h2>
                    </div>
                    <div class="body">
                        <div class="form-float" style="height: 35px;">
                            <a href="{{route('addClass')}}">
                                <button class="btn btn-success">ADD CLASS</button>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Class ID</th>
                                    <th>Class Name</th>
                                    <th>Teacher ID</th>
                                    <th>Teacher Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach ($class as $cls)
                                <tbody>
                                <tr>
                                    <td>{{$cls -> classId}}</td>
                                    <td>{{$cls -> className}}</td>
                                    <td>{{$cls -> teachers_teacherId}}</td>
                                    <td>{{$cls -> teacherName}}</td>
                                    <td>
                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-small bg-lime waves-effect ">
                                            <a href="academic_class/{{$cls -> classId}}/edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </button>

                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-small bg-red waves-effect">
                                            <a href="academic_class/{{$cls -> classId}}/delete">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </button>
                                    </td>
                                </tr>                                
                                </tbody> 
                                @endforeach                        
                            </table>
                        </div>
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
