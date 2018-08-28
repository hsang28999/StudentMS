@extends('layout')
@section('section')
<section class="content" id="teacher_detail">
    <div class="container-fluid">
        <!-- Exportable Table -->
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
                        <h2 style="display: inline">
                            TEACHER VIEW
                        </h2>
                    </div>
                </div>
                <!-- Example Tab -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile" data-toggle="tab">Profile</a></li>

                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile">
                                        <div class="col-xs-6">
                                            <p><b>Teacher Name:</b>  {{$teacher->teacherName}}</p>
                                            <p><b>Joining Date:</b> {{$teacher->joiningDate}}</p>
                                            <p><b>Date of Birth:</b> {{$teacher->dateOfBirth}}</p>
                                            <p><b>Address:</b> {{$teacher->address}}</p>
                                        </div>
                                        <div>
                                            <p><b>Phone:</b> {{$teacher->phone}}</p>
                                            <p><b>Gender:</b> {{$teacher->gender}}</p>
                                            <p><b>Email:</b> {{$teacher->email}}</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="attendance1">
                                        <div id="hide-table">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Example Tab -->
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
<script>
    activeSection("teacher");
</script>
@endsection
