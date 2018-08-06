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
                                ADD A MARK
                            </h2>
                        </div>
                        <div class="body">
                            <form>
                                <div class="form-float col-md-3">
                                    <label for="">Exam</label>
                                    <select class="form-control show-tick" >
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                                <div class="form-float col-md-3">
                                    <label for="">Class</label>
                                    <select class="form-control show-tick" >
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                                <div class="form-float col-md-3">
                                    <label for="">Section</label>
                                    <select class="form-control show-tick" >
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                                <div class="form-float col-md-3">
                                    <label for="">Subject</label>
                                    <select class="form-control show-tick" >
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>

                                <button type="button" class="btn btn-primary m-t-15 waves-effect">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        activeSection("mark","mark_Mark");
    </script>
@endsection