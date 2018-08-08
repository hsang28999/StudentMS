@extends('layout')
@section('section')
<section class="content">
    <div class="container-fluid">
        <!-- Subject Table-->
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
                            <li lass="active">

                            </li>
                        </ol>
                        <h2 style="display: inline">
                            TEACHER DETAIL
                        </h2>

                    </div>
                    <div class="body">
                        <div class="form-float" style="height: 35px;">
                            <a href="{{route('createSubject')}}">
                                <button class="btn btn-success">ADD SUBJECT</button>
                            </a>

                            <select class=" show-tick pull-right" >
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable ">
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
                                        <a href="#" class="btn btn-small bg-lime waves-effect ">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-small bg-red waves-effect">
                                            <i class="material-icons">delete</i>
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
<script>
    activeSection("academic","academic_subject");
</script>
@endsection
