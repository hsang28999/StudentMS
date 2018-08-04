@extends('layout')
@section('section')  
    <section class="content">
        <div class="container-fluid">
            <!--Breadcrumbs-->
            <div class="bc-icons-2">
                <ol class="breadcrumb indigo lighten-4">
                    <li class="breadcrumb-item"><a class="black-text" href="../../../index.html">Home</a><i class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>
                    <li class="breadcrumb-item"><a class="black-text" href="../student.html">Student</a><i class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>
                    <li class="breadcrumb-item active"><a class="black-text" href="#">Add Student</a><i class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>      
                </ol>
            </div>
            <!--#END# Breadcrumbs-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="col-xs-12">                                
                                    <tbody>
                                        <tr>
                                            <td class="col-md-6">
                                                <b>Name</b>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Username">
                                                    </div>
                                                </div>
                                            </td>
                                            <td  class="col-md-6">
                                                <b>Phone Number</b>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone_iphone</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="01282375119">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">
                                                <p>
                                                    <b>Class</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">group</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="T1707A">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-md-6">
                                                <p>
                                                    <b>Country</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">home</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Ex: Hà Nội">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">
                                                <b>Date</b>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-md-6">
                                                <b>Gender</b>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">wc</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Male or Female">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">
                                                <b>Email</b>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">public</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="abc@example.com">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-md-6">
                                                <b>Religion</b>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">local_library</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Male or Female">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <b>Address</b>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">location_on</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="8A - Tôn Thất Thuyết - Mỹ Đình 2- Cầu Giấy - Hà Nội">
                                                    </div>
                                                </div>
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
    </section>

    <script type="text/javascript">
        activeSection("student", "null");
    </script>
@endsection