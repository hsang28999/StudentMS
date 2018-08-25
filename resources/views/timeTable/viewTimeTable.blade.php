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
                                TIMETABLE DETAIL
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row" id="list-time-table">
                                @foreach($timeTable as $table)
                                <div class="col-md-3">
                                    <ul class="list-group time-table">
                                        <li class="list-group-item list-group-bg-cyan text-center dayValue">{{$table['dayValue']}}</li>
                                        @foreach($table['sessions'] as $session)
                                        <li class="list-group-item section-table">
                                            <span class="badge float-left margin-bot-5">Session <span class="section-index">{{$session['sessionOrder']}}</span></span>
                                            <p style="margin-left: 0px;margin-top:25px;">{{$session['subjectName']}}</p>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <script>
        activeSection("timeTable");
    </script>
@endsection
