@extends('layout')
@section('section')
<section class="content">
        <div class="container-fluid">

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <ol class="breadcrumb pull-right m-t--15">

                            </ol>
                            <h2 style="display: inline">
                                STUDENT LIST
                            </h2>
                        </div>
                        <div class="body">
                            <div class="form-float" style="height: 35px;">
                                <a href="{{route('addStudent')}}">
                                    <button class="btn btn-success">ADD STUDENT</button>
                                </a>
                                <form id="submit"  style="display: inline-block" method="get" action="">
                                    <select class="mdb-select" name="class">
                                        <option value="" disabled selected>Select Class</option>

                                        @foreach($class as $item)
                                            <option  value="{{$item -> classId}}" @if($item -> classId == app('request')->input('class')) selected @endif>{{$item -> className}}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn bg-deep-purple waves-effect" type="submit">Find</button>
                                </form>

                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($student as $key=> $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item -> studentName}}</td>
                                            <td>{{$item -> className}}</td>
                                            <td>{{$item -> email}}</td>
                                            <td>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="{{route('student')}}/view/{{$item -> studentId}}"><i class="material-icons">remove_red_eye</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-small bg-lime waves-effect "><a href="{{route('student')}}/edit/{{$item -> studentId}}"><i class="material-icons">edit</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-small bg-red waves-effect"><i class="material-icons" style="color: white;" data-toggle="modal" data-target="#{{$item -> studentId}}">delete</i></button>
                                            </td>
                                        </tr>


                                            <div class="modal fade" id="{{$item -> studentId}}" tabindex="-1" role="dialog">
                                                <input type="hidden" name="studentId" value="{{$item -> studentId}}">
                                                <div class="modal-dialog  modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            Are you sure to delete this!!!
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link waves-effect deleteBtn" id="{{$item -> studentId}}">Delete</button>
                                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->


        </div>
    </section>
<script type="text/javascript">
	activeSection("student", "null");
</script>
<script src="{{asset('js/student.js')}}"></script>

@endsection
