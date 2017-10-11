@extends('Admin.master')
@section('content')

    <form class="form-horizontal" action="" method="POST">
    <div class="container" style="margin-top: 80px;" >
        <div class="row">
            <div class="col-sm-10">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <h3 class="text-center text-primary">Manage Category Information</h3>
                        <h3 class="text-center text-success">
                        </h3>
                        <h3 class="text-center text-danger">
                        </h3>
                        <hr/>

                        <tr class="info text-primary">
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>

                        <tr>
                            <td class="text-center"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="edit-category.php?" class="btn btn-info btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="?status=delete" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete Category ID: ');">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection