@extends('layout')
@section('section')
    <section class="content">
        <div class="container-fluid">
            <!-- Subject create Table-->
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
                            <h2>
                                ADD Subject
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Class Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="">
                                                <select name="" id="">
                                                    <option value="">One</option>
                                                    <option value="">Two</option>
                                                    <option value="">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Teacher Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="">
                                                <select name="" id="">
                                                    <option value="">One</option>
                                                    <option value="">Two</option>
                                                    <option value="">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Type</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="">
                                                <select name="" id="">
                                                    <option value="">One</option>
                                                    <option value="">Two</option>
                                                    <option value="">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Pass Mark</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Final mark</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Subject Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Subject Author</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="">Subject Code</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" class="btn btn-primary m-t-15 waves-effect">Add subject</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Subject add Table-->
            {{--<div class="panel panel-info panel-footer">--}}
            {{--<div class="panel-heading bg-primary">Subject</div>--}}
            {{--<div class="panel-body">--}}
            {{--<label for="">--}}
            {{--<div class="input-group pull-right" style="width:30%">--}}
            {{--<span class="input-group-addon" id="basic-addon1">Search</span>--}}
            {{--<input type="text" class="form-control " placeholder="" aria-describedby="basic-addon1" >--}}
            {{--</div>--}}
            {{--</label>--}}
            {{--<table class="table table-striped">--}}
            {{--<thead>--}}
            {{--<tr>--}}
            {{--<th scope="col">#</th>--}}
            {{--<th scope="col">Subject Name</th>--}}
            {{--<th scope="col">Subject Author</th>--}}
            {{--<th scope="col">Subject Code</th>--}}
            {{--<th scope="col">Teacher</th>--}}
            {{--<th scope="col">Pass Mark</th>--}}
            {{--<th scope="col">Final Mark</th>--}}
            {{--<th scope="col">Type</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--<tr>--}}
            {{--<th scope="row">1</th>--}}
            {{--<td>English</td>--}}
            {{--<td>Hossain Mir	</td>--}}
            {{--<td>ENG001	</td>--}}
            {{--<td>Dipok Kumar Halder	</td>--}}
            {{--<td>40</td>--}}
            {{--<td>100</td>--}}
            {{--<td><button type="button" class="btn btn-primary btn-sm">Mandatory</button></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th scope="row">1</th>--}}
            {{--<td>English</td>--}}
            {{--<td>Hossain Mir	</td>--}}
            {{--<td>ENG001	</td>--}}
            {{--<td>Dipok Kumar Halder	</td>--}}
            {{--<td>40</td>--}}
            {{--<td>100</td>--}}
            {{--<td><button type="button" class="btn btn-primary btn-sm">Mandatory</button></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th scope="row">1</th>--}}
            {{--<td>English</td>--}}
            {{--<td>Hossain Mir	</td>--}}
            {{--<td>ENG001	</td>--}}
            {{--<td>Dipok Kumar Halder	</td>--}}
            {{--<td>40</td>--}}
            {{--<td>100</td>--}}
            {{--<td><button type="button" class="btn btn-primary btn-sm">Mandatory</button></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th scope="row">1</th>--}}
            {{--<td>English</td>--}}
            {{--<td>Hossain Mir	</td>--}}
            {{--<td>ENG001	</td>--}}
            {{--<td>Dipok Kumar Halder	</td>--}}
            {{--<td>40</td>--}}
            {{--<td>100</td>--}}
            {{--<td><button type="button" class="btn btn-primary btn-sm">Mandatory</button></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th scope="row">1</th>--}}
            {{--<td>English</td>--}}
            {{--<td>Hossain Mir	</td>--}}
            {{--<td>ENG001	</td>--}}
            {{--<td>Dipok Kumar Halder	</td>--}}
            {{--<td>40</td>--}}
            {{--<td>100</td>--}}
            {{--<td><button type="button" class="btn btn-primary btn-sm">Mandatory</button></td>--}}
            {{--</tr>--}}

            {{--</tbody>--}}
            {{--</table>--}}
            {{--<div>Showing 5 of 5 items</div>--}}
            {{--<nav aria-label="Page navigation example" class="pull-right ">--}}
            {{--<ul class="pagination">--}}
            {{--<li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
            {{--<li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
            {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
            {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
            {{--<li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
            {{--</ul>--}}
            {{--</nav>--}}
            {{--</div>--}}

            {{--</div>--}}

        </div>
    </section>
    <script>
        activeSection("academic",'academic_subject');
    </script>
@endsection
