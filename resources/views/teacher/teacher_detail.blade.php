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
                                    <li class="list-group-item" style=" height: 50px;">Date of Birth <span class="pull-right">25 Feb 2009</span></li>
                                    <li class="list-group-item">Phone <span class="pull-right">01728660964</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    {{--<li role="presentation" class="active"><a href="#home" data-toggle="tab">HOME</a></li>--}}
                                    <li role="presentation" class="active"><a href="#profile" data-toggle="tab">PROFILE</a></li>
                                    {{--<li role="presentation"><a href="#messages" data-toggle="tab">MESSAGES</a></li>--}}
                                    {{--<li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>--}}
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content container-fluid">
                                    {{--<div role="tabpanel" class="tab-pane fade in active" id="home">--}}
                                        {{--<b>Home Content</b>--}}
                                        {{--<p>--}}
                                            {{--Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.--}}
                                            {{--Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid--}}
                                            {{--pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren--}}
                                            {{--sadipscing mel.--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p class="pull-left">Joining Date</p>
                                            <p class="pull-right">20 Jun 2017</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p class="pull-left">Email</p>
                                            <p class="pull-right">info2@inilabs.net</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p class="pull-left">Religion</p>
                                            <p class="pull-right">VietNam</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p class="pull-left">Address</p>
                                            <p class="pull-right">7 Ton That Thuyet</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <p class="pull-left">Username</p>
                                            <p class="pull-right">teacher1</p>
                                        </div>

                                    </div>
                                    {{--<div role="tabpanel" class="tab-pane fade" id="messages">--}}
                                        {{--<b>Message Content</b>--}}
                                        {{--<p>--}}
                                            {{--Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.--}}
                                            {{--Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid--}}
                                            {{--pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren--}}
                                            {{--sadipscing mel.--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div role="tabpanel" class="tab-pane fade" id="settings">--}}
                                        {{--<b>Settings Content</b>--}}
                                        {{--<p>--}}
                                            {{--Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.--}}
                                            {{--Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid--}}
                                            {{--pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren--}}
                                            {{--sadipscing mel.--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                </div>
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
