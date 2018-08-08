@extends('layout')
@section('section')
    <section class="content">
        <div class="container-fluid">
            <!--  Tab -->
            <div class="row">
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
                                MARK
                            </h2>
                        </div>
                        <div class="body">
                            <div class="form-float" >
                                <a href="{{route('createSubject')}}">
                                    <button class="btn btn-success">ADD SUBJECT</button>
                                </a>

                                <select class=" show-tick pull-right" >
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </select>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab">HOME</a></li>
                                <li role="presentation"><a href="#best" data-toggle="tab">BEST</a></li>
                                <li role="presentation"><a href="#good" data-toggle="tab">GOOD</a></li>
                                <li role="presentation"><a href="#average" data-toggle="tab">AVERAGE</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Roll</th>
                                                <th>Email</th>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                </td>
                                            </tr><tr>
                                                <td>1</td>
                                                <td>One</td>
                                                <td>1</td>
                                                <td>Dipok Kumar Halder</td>
                                                <td></td>
                                                <td>
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                </td>
                                            </tr>




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="best">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Roll</th>
                                                <th>Email</th>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                </td>
                                            </tr><tr>
                                                <td>1</td>
                                                <td>One</td>
                                                <td>1</td>
                                                <td>Dipok Kumar Halder</td>
                                                <td></td>
                                                <td>
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                </td>
                                            </tr>




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="good">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Roll</th>
                                                <th>Email</th>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                </td>
                                            </tr><tr>
                                                <td>1</td>
                                                <td>One</td>
                                                <td>1</td>
                                                <td>Dipok Kumar Halder</td>
                                                <td></td>
                                                <td>
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                </td>
                                            </tr>




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="average">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Roll</th>
                                                <th>Email</th>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                </td>
                                            </tr><tr>
                                                <td>1</td>
                                                <td>One</td>
                                                <td>1</td>
                                                <td>Dipok Kumar Halder</td>
                                                <td></td>
                                                <td>
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                                                    <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                        <i class="material-icons">remove_red_eye</i>
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
                </div>
            </div>
            <!-- #END# Example Tab -->
        </div>
    </section>

    <script>
        activeSection("mark","mark_mark");
    </script>
@endsection
