@extends('layout')
@section('section')

<section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <ol class="breadcrumb pull-right m-t--15">

                        </ol>
                        <h2 style="display: inline">
                            TEACHER DETAIL
                        </h2>
                    </div>
                    <div class="body" id="small-table">
                        <a href="{{route('createClass')}}">
                            <button class="btn btn-success">ADD TEACHER</button>
                        </a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date of Birth</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Aflatun Kawser</td>
                                        <td>info2@edu.net</td>
                                        <td>017286609654</td>
                                        <td>25 Feb 1979</td>
                                        <td>
                                            <a href="#" class="btn btn-small bg-light-green waves-effect ">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
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
        <!-- #END# Exportable Table -->
    </div>
</section>

<script>
    activeSection("teacher","null");
</script>
@endsection
