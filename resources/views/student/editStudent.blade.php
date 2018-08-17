@extends('layout')
@section('section')
    {{--{{dump($student)}}--}}
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
                                <form action="" METHOD="POST">
                                    @csrf
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
                                                        <input value="{{$student -> studentName}}" type="text" class="form-control" placeholder="Your Name" name="name">
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
                                                        <input value="{{$student -> phoneNumber}}" type="text" class="form-control" placeholder="01282375119" name="phone">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">
                                                <b>Gender</b>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">wc</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <select  class="form-control show-tick" name="gender">
                                                            <option value="">-- Please select --</option>
                                                            <option value="1" @if(($student -> gender) == 1) selected @endif>Male</option>
                                                            <option value="0" @if(($student -> gender) == 0) selected @endif >Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-md-6">
                                                <p>
                                                    <b>Student Code</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">home</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input value="{{$student -> studentCode}}" name="studentCode" type="text" class="form-control" placeholder="A001">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">
                                                <b>BirthDay</b>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input value="{{$student -> dateOfBirth}}" name="birthday" type="text" class="form-control " placeholder="Ex: 2016-07-30">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-md-6">
                                                <p>
                                                    <b>Class</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">group</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" name="studentClass">
                                                            <option value="">-- Please select --</option>
                                                            @foreach($class as $item)
                                                                <option value="{{$item -> classId}}" @if($item -> classId == $student -> classes_classId) selected @endif>{{$item -> className}}</option>
                                                            @endforeach
                                                        </select>
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
                                                        <input value="{{$student -> email}}" name="email" type="text" class="form-control" placeholder="abc@example.com">
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
                                                        <input value="{{$student -> address}}" name="address" type="text" class="form-control" placeholder="8A - Tôn Thất Thuyết - Mỹ Đình 2- Cầu Giấy - Hà Nội">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update Student</button>
                                </form>
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