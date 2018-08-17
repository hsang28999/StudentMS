@extends('layout')
@section('section')
	<section class="content yyyymmdd">
        <div class="container-fluid">
            <!--Breadcrumbs-->
            <!--#END# Breadcrumbs-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">         
                            <div class="table-responsive">
                                <form action="{{URL::action('TeacherController@update',['teacherId' => $editById->teacherId])}}" method="Post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="teacherId" value="{{old('teacherId', $editById['teacherId'])}}">
                                    <table class="col-xs-12"> 
                                        <tbody>
                                            <tr>
                                                <td class="col-md-6">
                                                    <b> Teacher Name</b>
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="name" name="teacherName" value="{{old('teacherName', $editById['teacherName'])}}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td  class="col-md-6">
                                                    <b>Joining Date</b>
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">work</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control date" placeholder="yyyy/mm/dd" name="joiningDate" value="{{old('joiningDate', $editById['joiningDate'])}}">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-6">
                                                    <b>Date Of Birth</b>
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control date" placeholder="yyyy/mm/dd" name="dateOfBirth" value="{{old('dateOfBirth', $editById['dateOfBirth'])}}">
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
                                                            <input type="text" class="form-control" placeholder="Male or Female" name="gender" value="{{old('gender', $editById['gender'])}}">
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
                                                            <input type="text" class="form-control" placeholder="abc@example.com" name="email" value="{{old('email', $editById['email'])}}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-md-6">
                                                    <b>Phone</b>
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">phone_iphone</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="eg: 01282375119" name="phone" value="{{old('phone', $editById['phone'])}}">
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
                                                            <input type="text" class="form-control" placeholder="8A - Tôn Thất Thuyết - Mỹ Đình 2- Cầu Giấy - Hà Nội" name="address" value="{{old('address', $editById['address'])}}">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>                                     
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                                </form>
                            </div>                                                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        activeSection("teacher", "null");
    </script>
@endsection