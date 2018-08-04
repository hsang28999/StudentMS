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
                            TEACHER DETAIL
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="body">
                                <img class="profile-user-img img-responsive img-circle" src="https://demo.inilabs.net/school/v4.0/uploads/images/58323541bc678d1649114839cb2edfc4ccd69eeeb0831852e0a154975cfa5ee44f1d2d9b6e4322a53304a08b0149d213532c6bc8e3d56194f36da30ba4944bbc.jpg">
                                <h3 class="text-center">Minh Beo</h3>
                                <ul class="list-group">
                                    <li class="list-group-item">Gender <span class="pull-right">Male</span></li>
                                    <li class="list-group-item">Date of Birth <span class="pull-right">25 Feb 2009</span></li>
                                    <li class="list-group-item">Phone <span class="pull-right">01728660964</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
<script>
    activeSection("teacher");
</script>
@endsection
