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
                                ADD CLASS
                            </h2>
                        </div>
                        <div class="body">
                            <form>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="" class="form-control">
                                        <label class="form-label">Class</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="" class="form-control">
                                        <label class="form-label">Class Numberic</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label for="">Teacher Name</label>
                                    <select class="form-control show-tick" >
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                                <br>
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        activeSection("academic","academic_Class");
    </script>
@endsection
