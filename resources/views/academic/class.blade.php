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
                            LIST CLASS
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
                                    <th>#</th>
                                    <th>Class Name</th>
                                    <th>Teacher Name</th>
                                    <th>Teacher Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach ($class as $key => $cls)
                                <tbody>
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$cls -> className}}</td>
                                    <td>{{$cls -> teacherName}}</td>
                                    <td>{{$cls -> email}}</td>
                                    <td>
                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-small bg-lime waves-effect ">
                                            <a href="academic_class/edit/{{$cls -> classId}}">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </button>

                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-small bg-red waves-effect">
                                            <a href="academic_class/delete/{{$cls -> classId}}">
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
