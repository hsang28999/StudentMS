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
                            MARK DETAIL
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
                                        <div style="border:1px solid #23292F; margin-bottom: 10px;" class="box container-fluid margin">
                                            <div class="box-header" style="background-color:#FFFFFF;">
                                                <h3 class="box-title" style="color:#23292F;">First Semister</h3>
                                            </div>
                                            <div class="box-body" style="border-top:1px solid #23292F;">
                                                <div style="max-height: none;" tabindex="0">
                                                    <div id="mCSB_1_container" class="mCSB_container mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th class="text-center" rowspan="2" style="background-color:#395C7F;color:#fff;">Subject</th>
                                                                <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Exam</th>
                                                                <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Class Test</th>
                                                                <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Assignment</th>
                                                                <th colspan="3" class="text-center " style="background-color:#395C7F;color:#fff;">Total</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="bg-sky text-center ">Mark</th>
                                                                <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark</th>
                                                                <th class="bg-sky text-center ">Mark</th>
                                                                <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark</th>
                                                                <th class="bg-sky text-center ">Mark</th>
                                                                <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark</th>
                                                                <th class="bg-sky-total text-center">Mark</th>
                                                                <th class="bg-purple-shipu text-center" data-title="Point">Point</th>
                                                                <th class="bg-sky-total-grade text-center" data-title="Grade">Grade</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-black" data-title="Subject">English</td>
                                                                <td class="text-black" data-title="Mark">33</td>
                                                                <td class="text-black" data-title="Highest Mark">44</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">63</td>
                                                                <td class="text-black" data-title="Point">3.50</td>
                                                                <td class="text-black" data-title="Grade">A-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-black" data-title="Subject">History</td>
                                                                <td class="text-black" data-title="Mark">32</td>
                                                                <td class="text-black" data-title="Highest Mark">46</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">9</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">59</td>
                                                                <td class="text-black" data-title="Point">3.00</td>
                                                                <td class="text-black" data-title="Grade">B</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-black" data-title="Subject">Physics</td>
                                                                <td class="text-black" data-title="Mark">32</td>
                                                                <td class="text-black" data-title="Highest Mark">45</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">61</td>
                                                                <td class="text-black" data-title="Point">3.50</td>
                                                                <td class="text-black" data-title="Grade">A-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-black" data-title="Subject">Computer Science</td>
                                                                <td class="text-black" data-title="Mark">27</td>
                                                                <td class="text-black" data-title="Highest Mark">61</td>
                                                                <td class="text-black" data-title="Mark">9</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">56</td>
                                                                <td class="text-black" data-title="Point">3.00</td>
                                                                <td class="text-black" data-title="Grade">B</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-black" data-title="Subject">Programming Science</td>
                                                                <td class="text-black" data-title="Mark">36</td>
                                                                <td class="text-black" data-title="Highest Mark">52</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">66</td>
                                                                <td class="text-black" data-title="Point">3.50</td>
                                                                <td class="text-black" data-title="Grade">A-</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="box-footer" style="padding-left:0px;">
                                                            <p class="text-black">Total Marks : <span class="text-red text-bold">305.00</span>&nbsp;&nbsp;&nbsp;&nbsp;Average Marks : <span class="text-red text-bold">61.00</span>&nbsp;&nbsp;&nbsp;&nbsp;Average Point : <span class="text-red text-bold">3.50</span>&nbsp;&nbsp;&nbsp;&nbsp;Average Grade : <span class="text-red text-bold">A-</span></p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div style="border:1px solid #23292F;" class="box container-fluid">
                                            <div class="box-header" style="background-color:#FFFFFF;">
                                                <h3 class="box-title" style="color:#23292F;">First Semister</h3>
                                            </div>
                                            <div class="box-body" style="border-top:1px solid #23292F;">
                                                <div style="max-height: none;" tabindex="0">
                                                    <div id="mCSB_1_container" class="mCSB_container mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th class="text-center" rowspan="2" style="background-color:#395C7F;color:#fff;">Subject</th>
                                                                <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Exam</th>
                                                                <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Class Test</th>
                                                                <th colspan="2" class=" text-center" style="background-color:#395C7F;color:#fff;">Assignment</th>
                                                                <th colspan="3" class="text-center " style="background-color:#395C7F;color:#fff;">Total</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="bg-sky text-center ">Mark</th>
                                                                <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark</th>
                                                                <th class="bg-sky text-center ">Mark</th>
                                                                <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark</th>
                                                                <th class="bg-sky text-center ">Mark</th>
                                                                <th class="bg-sky-light text-center" data-title="Highest Mark">Highest Mark</th>
                                                                <th class="bg-sky-total text-center">Mark</th>
                                                                <th class="bg-purple-shipu text-center" data-title="Point">Point</th>
                                                                <th class="bg-sky-total-grade text-center" data-title="Grade">Grade</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-black" data-title="Subject">English</td>
                                                                <td class="text-black" data-title="Mark">33</td>
                                                                <td class="text-black" data-title="Highest Mark">44</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">63</td>
                                                                <td class="text-black" data-title="Point">3.50</td>
                                                                <td class="text-black" data-title="Grade">A-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-black" data-title="Subject">History</td>
                                                                <td class="text-black" data-title="Mark">32</td>
                                                                <td class="text-black" data-title="Highest Mark">46</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">9</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">59</td>
                                                                <td class="text-black" data-title="Point">3.00</td>
                                                                <td class="text-black" data-title="Grade">B</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-black" data-title="Subject">Physics</td>
                                                                <td class="text-black" data-title="Mark">32</td>
                                                                <td class="text-black" data-title="Highest Mark">45</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">61</td>
                                                                <td class="text-black" data-title="Point">3.50</td>
                                                                <td class="text-black" data-title="Grade">A-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-black" data-title="Subject">Computer Science</td>
                                                                <td class="text-black" data-title="Mark">27</td>
                                                                <td class="text-black" data-title="Highest Mark">61</td>
                                                                <td class="text-black" data-title="Mark">9</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">56</td>
                                                                <td class="text-black" data-title="Point">3.00</td>
                                                                <td class="text-black" data-title="Grade">B</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-black" data-title="Subject">Programming Science</td>
                                                                <td class="text-black" data-title="Mark">36</td>
                                                                <td class="text-black" data-title="Highest Mark">52</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">10</td>
                                                                <td class="text-black" data-title="Highest Mark">10</td>
                                                                <td class="text-black" data-title="Mark">66</td>
                                                                <td class="text-black" data-title="Point">3.50</td>
                                                                <td class="text-black" data-title="Grade">A-</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="box-footer" style="padding-left:0px;">
                                                            <p class="text-black">Total Marks : <span class="text-red text-bold">305.00</span>&nbsp;&nbsp;&nbsp;&nbsp;Average Marks : <span class="text-red text-bold">61.00</span>&nbsp;&nbsp;&nbsp;&nbsp;Average Point : <span class="text-red text-bold">3.50</span>&nbsp;&nbsp;&nbsp;&nbsp;Average Grade : <span class="text-red text-bold">A-</span></p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
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
    activeSection("mark");
</script>
@endsection
