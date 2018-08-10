@extends('layout')
@section('section')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="{{route('addStudent')}}">
                                    <button class="btn btn-success">ADD STUDENT</button>
                                </a>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >
                                        <i class="material-icons">list</i>
                                        <span>List Class</span>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">T1707A</a></li>
                                        <li><a href="javascript:void(0);">T1505M</a></li>
                                        <li><a href="javascript:void(0);">AB1505A</a></li>
                                        <li><a href="javascript:void(0);">AB1505A</a></li>
                                        <li><a href="javascript:void(0);">AB1505A</a></li>
                                        <li><a href="javascript:void(0);">AB1505A</a></li>
                                        <li><a href="javascript:void(0);">AB1505A</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Johnson Crusor</td>
                                            <td>T1707A</td>
                                            <td>ABC@gmail.com</td>
                                            <td>                                        
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="{{route('viewStudent')}}"><i class="material-icons">remove_red_eye</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-small bg-lime waves-effect "><a href="{{route('editStudent')}}"><i class="material-icons">edit</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-small bg-red waves-effect"><i class="material-icons" style="color: white;">delete</i></button>      
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>                                           
                                            <td>Diana Rejex</td>
                                            <td>T1707A</td>
                                            <td>ABC@gmail.com</td>
                                            <td>                                        
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="{{route('viewStudent')}}"><i class="material-icons">remove_red_eye</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-small bg-lime waves-effect "><a href="{{route('editStudent')}}"><i class="material-icons">edit</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-small bg-red waves-effect"><i class="material-icons" style="color: white;">delete</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>                                           
                                            <td>Alex Panther</td>
                                            <td>T1707A</td>
                                            <td>ABC@gmail.com</td>
                                            <td>                                        
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="{{route('viewStudent')}}"><i class="material-icons">remove_red_eye</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-small bg-lime waves-effect "><a href="{{route('editStudent')}}"><i class="material-icons">edit</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-small bg-red waves-effect"><i class="material-icons" style="color: white;">delete</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Loren Carlet</td>
                                            <td>T1707A</td>
                                            <td>ABC@gmail.com</td>
                                            <td>                                        
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-small bg-light-green waves-effect"><a href="{{route('viewStudent')}}"><i class="material-icons">remove_red_eye</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-small bg-lime waves-effect "><a href="{{route('editStudent')}}"><i class="material-icons">edit</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-small bg-red waves-effect"><i class="material-icons" style="color: white;">delete</i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            
            <!-- #END# Exportable Table -->
        </div>
    </section>
<script type="text/javascript">
	activeSection("student", "null");
</script>

@endsection