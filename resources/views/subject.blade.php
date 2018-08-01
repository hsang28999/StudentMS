@extends('layout')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                SUBJECT
                <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
            </h2>
        </div>
        <!-- Subject Table-->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header row clearfix">
                            <button class="btn btn-success">ADD SUBJECT</button>
                        <div class="col-md-3 pull-right" >
                            <select class="form-control show-tick" data-live-search="true">
                                <option>All</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>
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
                                    <th>Subject Name</th>
                                    <th>Subject Author</th>
                                    <th>Subject Code</th>
                                    <th>Teacher</th>
                                    <th>Pass Mark</th>
                                    <th>Final Mark</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>English</td>
                                    <td>Hossain Mir	</td>
                                    <td>ENG001</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td>40</td>
                                    <td>100</td>
                                    <td>
                                        <button class="btn btn-info btn-sm">Mandatory</button>
                                    </td>
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
                                    <td>English</td>
                                    <td>Hossain Mir	</td>
                                    <td>ENG001</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td>40</td>
                                    <td>100</td>
                                    <td>
                                        <button class="btn btn-info btn-sm">Mandatory</button>
                                    </td>
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
                                    <td>English</td>
                                    <td>Hossain Mir	</td>
                                    <td>ENG001</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td>40</td>
                                    <td>100</td>
                                    <td>
                                        <button class="btn btn-info btn-sm">Mandatory</button>
                                    </td>
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
                                    <td>English</td>
                                    <td>Hossain Mir	</td>
                                    <td>ENG001</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td>40</td>
                                    <td>100</td>
                                    <td>
                                        <button class="btn btn-info btn-sm">Mandatory</button>
                                    </td>
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
                                    <td>English</td>
                                    <td>Hossain Mir	</td>
                                    <td>ENG001</td>
                                    <td>Dipok Kumar Halder</td>
                                    <td>40</td>
                                    <td>100</td>
                                    <td>
                                        <button class="btn btn-info btn-sm">Mandatory</button>
                                    </td>
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
        <!-- #END# subJect Table-->

    </div>
</section>
@stop