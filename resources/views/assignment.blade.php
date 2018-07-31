@extends('layout')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="panel panel-info panel-footer">
            <div class="panel-heading bg-primary">
                Assignment
            </div>
            <div class="panel-body">
                <label for="">
                    <div class="input-group pull-right" style="width:30%">
                        <span class="input-group-addon" id="basic-addon1">Search</span>
                        <input type="text" class="form-control " placeholder="" aria-describedby="basic-addon1" >
                    </div>
                </label>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Uploader</th>
                        <th scope="col">File</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Assignment for writing one to 100</td>
                        <td>Student have to make an assignment to write 1 to 100	</td>
                        <td>10 Jun 2018</td>
                        <td>Mr. Admin	</td>
                        <td></td>
                        <td>
                            <a href="#" data-toggle="tooltip" title="Upload">
                                <i class="material-icons">
                                    cloud_upload
                                </i>
                            </a>
                            <a href="#" data-toggle="tooltip" title="View">
                                <i class="material-icons">
                                    pageview
                                </i>
                            </a>
                        </td>

                    </tr>
                    </tbody>
                </table>
                <div>Showing 5 of 5 items</div>
                <nav aria-label="Page navigation example" class="pull-right ">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>

        </div>

    </div>
</section>    
@endsection