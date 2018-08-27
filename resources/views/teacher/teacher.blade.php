@extends('layout')
@section('section')

<section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <ol class="breadcrumb pull-right m-t--15">

                        </ol>
                        <h2 style="display: inline" >
                            TEACHER
                        </h2>
                    </div>
                    <div class="body" id="small-table">
                        <div class="form-float" style="height: 35px;">
                            <a href="{{route('addTeacher')}}">
                                <button class="btn btn-success">ADD TEACHER</button>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Teacher Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date of Birth</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <?php foreach ($allTeachers as $key => $tch): ?>
                                <tbody>
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><?php echo $tch['teacherName'] ?></td>
                                        <td><?php echo $tch['email'] ?></td>
                                        <td><?php echo $tch['phone'] ?></td>
                                        <td class="dayValue"><?php echo $tch['dateOfBirth'] ?></td>
                                        <td>
                                            <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="teacher/view/<?php echo $tch['teacherId']?>"><i class="material-icons">remove_red_eye</i></a></button>

                                            <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-small bg-lime waves-effect "><a href="teacher/edit/<?php echo $tch['teacherId']?>"><i class="material-icons">edit</i></a></button>

                                            <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-small bg-red waves-effect"><a href="teacher/delete/<?php echo $tch['teacherId']?>"><i class="material-icons" style="color: white;">delete</i></a></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php endforeach ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>

<script>
    activeSection("teacher","null");
</script>
@endsection
