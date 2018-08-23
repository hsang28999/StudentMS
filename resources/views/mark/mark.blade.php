@extends('layout')
@section('section')
    <section class="content">
        <div class="container-fluid">
            <!--  Tab -->
           <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <ol class="breadcrumb pull-right m-t--15">

                            </ol>
                            <h2>
                                MARK
                            </h2>
                        </div>
                        <div class="body">
                            <div class="form-float" style="height: 35px;">
                                <a href="{{route('addMark')}}">
                                    <button class="btn btn-success">ADD MARK</button>
                                </a>
                                <select class=" show-tick pull-right" >
                                    <option value="">-- Please select --</option>
                                    @foreach($class as $item)
                                        <option value="{{$item -> classId}}">{{$item -> className}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Student</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Past Mark</th>
                                        <th>Final Mark</th>
                                        <th>Mark</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="{{route('viewMark')}}" class="btn btn-small bg-light-green waves-effect ">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        @foreach($mark as $mk)
                                        <td>{$mk -> markId}</td>
                                        <td value="{{$mk->students_studentId}}">{$mk -> studentName}</td>
                                        <td value="{{$mk->subjects_subjectId}}">{$mk -> subjectName}</td>
                                        <td>{$mk -> created_at}</td>
                                        <td>40</td>
                                        <td>100</td>
                                        <td>{$mk -> markValue}</td>
                                        <td>
                                            <a href="{{route('viewMark')}}" class="btn btn-small bg-light-green waves-effect ">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                        </td>
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example Tab -->
        </div>
    </section>

    <script>
        activeSection("mark","mark_mark");
    </script>
@endsection
