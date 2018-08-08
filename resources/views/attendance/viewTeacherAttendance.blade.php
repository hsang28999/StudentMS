@extends('layout')
@section('section')
	<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="card">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>Johnson Crusor</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>0128 235 5119</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>ABC@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        activeSection("attendance", "attendance_teacher");
    </script>
@endsection