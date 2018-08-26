@extends('layout')
@section('section')
<section class="content">
    <div class="container-fluid">
        <!-- Subject Table-->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <ol class="breadcrumb pull-right m-t--15">

                        </ol>
                        <h2 style="display: inline">
                            SUBJECT
                        </h2>

                    </div>
                    <div class="body">
                        <div class="form-float" style="height: 35px;">
                            <a href="{{route('createSubject')}}">
                                <button class="btn btn-success">ADD SUBJECT</button>
                            </a>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable ">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Subject Name</th>
                                    <th>Teacher Name</th>
                                    <th>Pass Mark</th>
                                    <th>Final Mark</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subject as $item)
                                    <tr>
                                    <td>{{$item -> subjectId}}</td>
                                    <td>{{$item -> subjectName}}</td>
                                    <td>{{$item -> teacherName}}</td>
                                    <td>{{$item -> passMark}}</td>
                                    <td>{{$item -> finalMark}}</td>
                                    <td>
                                        <button class="btn btn-info btn-sm">Mandatory</button>
                                    </td>
                                    <td>
                                        <a href="{{route('editSubject')}}?id={{$item -> subjectId}}" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons" data-toggle="modal" data-target="#{{$item -> subjectId}}">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                    <div class="modal fade" id="{{$item -> subjectId}}" tabindex="-1" role="dialog">
                                        <input type="hidden" name="studentId" value="{{$item -> subjectId}}">
                                        <div class="modal-dialog  modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    Are you sure to delete this!!!
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link waves-effect deleteBtn" id="{{$item -> subjectId}}">Delete</button>
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
        <!-- #END# subJect Table-->

    </div>
</section>
<script>
    activeSection("academic","academic_subject");
</script>
<script src="{{asset('js/subject.js')}}"></script>
@endsection
