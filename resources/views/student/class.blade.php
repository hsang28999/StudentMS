@extends('layout')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                SUBJECT CLASS
                <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
            </h2>
        </div>
        <!-- Class Table-->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('createClass')}}">
                            <button class="btn btn-success">ADD CLASS</button>
                        </a>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Class</th>
                                    <th>Class Numberic</th>
                                    <th>Teacher Name</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><tr>
                                    <td>1</td>
                                    <td>One</td>
                                    <td>1</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# class Table-->
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
@stop