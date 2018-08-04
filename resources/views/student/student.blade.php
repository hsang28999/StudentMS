@extends('layout')
@section('section')
<section class="content">
        <div class="container-fluid">
            <div class="bc-icons-2">
                <ol class="breadcrumb indigo lighten-4">
                    <li class="breadcrumb-item"><a class="black-text" href="../../index.html">Home</a><i class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>
                    <li class="breadcrumb-item active"><a class="black-text" href="#">Student</a><i class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>                  
                </ol>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="{{route('addStudent')}}"><i class="material-icons">add</i>
                                    <span>Add Student</span>
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
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" style="border-radius: 10px; background: #00acac;"><a href="{{route('viewStudent')}}"><i class="material-icons" style="color: white;">done</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" style="border-radius: 10px; background-color: #f59c1a"><a href="{{route('editStudent')}}"><i class="material-icons" style="color: white;">edit</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" style="border-radius: 10px; background-color: #ff5b57"><i class="material-icons" style="color: white;">delete</i></button>      
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>                                           
                                            <td>Diana Rejex</td>
                                            <td>T1707A</td>
                                            <td>ABC@gmail.com</td>
                                            <td>                                        
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" style="border-radius: 10px; background: #00acac;"><a href="{{route('viewStudent')}}"><i class="material-icons" style="color: white;">done</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" style="border-radius: 10px; background-color: #f59c1a"><a href="{{route('editStudent')}}"><i class="material-icons" style="color: white;">edit</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" style="border-radius: 10px; background-color: #ff5b57"><i class="material-icons" style="color: white;">delete</i></button>      
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>                                           
                                            <td>Alex Panther</td>
                                            <td>T1707A</td>
                                            <td>ABC@gmail.com</td>
                                            <td>                                        
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" style="border-radius: 10px; background: #00acac;"><a href="{{route('viewStudent')}}"><i class="material-icons" style="color: white;">done</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" style="border-radius: 10px; background-color: #f59c1a"><a href="{{route('editStudent')}}"><i class="material-icons" style="color: white;">edit</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" style="border-radius: 10px; background-color: #ff5b57"><i class="material-icons" style="color: white;">delete</i></button>      
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Loren Carlet</td>
                                            <td>T1707A</td>
                                            <td>ABC@gmail.com</td>
                                            <td>                                        
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="View" style="border-radius: 10px; background: #00acac;"><a href="{{route('viewStudent')}}"><i class="material-icons" style="color: white;">done</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Edit" style="border-radius: 10px; background-color: #f59c1a"><a href="{{route('editStudent')}}"><i class="material-icons" style="color: white;">edit</i></a></button>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Delete" style="border-radius: 10px; background-color: #ff5b57"><i class="material-icons" style="color: white;">delete</i></button>      
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