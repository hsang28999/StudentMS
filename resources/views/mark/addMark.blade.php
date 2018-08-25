@extends('layout')
@section('section')
    <section class="content yyyymmdd">
        <div class="container-fluid">
            <!-- Class Table-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                             <ol class="breadcrumb pull-right m-t--15">

                            </ol>
                            <h2>
                                ADD MARK
                            </h2>
                        </div>
                        <form method="GET" action="{{route('addMark')}}">
                            @csrf
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="form-float col-md-3">
                                        <label for="">Class</label>
                                        <select class="form-control show-tick" name="className" id="classID" >
                                            <option value="">---Select Class---</option>
                                            @foreach(App\Classes::pluck('className')->all() as $key=>$val)
                                            <option value="{{$key}}">{{$val}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-float col-md-3">
                                        <label for="">Subject</label>
                                        <select class="form-control show-tick" name="subjects_subjectId">
                                            <option value="">---Select Subject---</option>
                                            <@foreach(App\Subject::pluck('subjectName')->all() as $key=>$val)
                                            <option value="{{$key}}">{{$val}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- <div class="form-float col-md-3">
                                        <label for="">Date</label>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text"  class="form-control date" placeholder="VD: 2016/07/26" name="dateMark">
                                            </div>
                                        </div>
                                    </div>  -->                                  
                                    <div>
                                        <button type="submit" class="btn bg-teal m-t-15 waves-effect" id="findBtn">ADD MARK</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                        <form id="markData" method="POST" action="{{route('addMark')}}">
                           @csrf
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-xs-12"">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Student Name</th>
                                                    <th>Class Name</th>
                                                    <th>Subject</th>
                                                    <th>Mark</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @foreach(App\Mark::all() as $key=>$val)
                                                <tr>
                                                    <td name="className">
                                                        <div>
                                                            <input type="text" name="">
                                                        </div>
                                                    </td>
                                                    <td name="subjectName" value="{{$key->subjects_subjectId}}">{{$val->subjectName}}
                                                    </td>
                                                    <td name="markValue">
                                                        <div class="form-group">
                                                            <input type="number">
                                                        </div>
                                                    </td>
                                                </tr> 
                                                @endforeach 
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-success pull-center">Submit</button>
                                    </div>
                                </div>
                            </div> 
    
                        </form>                  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        activeSection("mark","mark_Mark");
    </script>
@endsection
