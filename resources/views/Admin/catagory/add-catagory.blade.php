@extends('Admin.master')
@section('content')

<br>

            <form class="form-horizontal" action="{{url('/catagory/new-catagory')}}" method="POST">
                {{csrf_field()}}
                <h3 class="text-center text-primary">Add Category</h3>
                <hr/>
                @if($message=Session::get('message'))
                    <h3 class="text-center text-success">{{$message}}</h3>
                @endif
                <h3 class="text-center text-success"></h3>
                <div class="form-group">
                    <label for="inputCategoryName" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="category_name" required class="form-control" id="inputCategoryName" placeholder="Category Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCategoryDescription" class="col-sm-2 control-label">Category Description</label>
                    <div class="col-sm-10">
                        <textarea name="category_description" cols="30" rows="10" required style="resize: vertical;"  class="form-control" id="inputCategoryDescription" placeholder="Category Description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPublicationStatus" class="col-sm-2">Publication Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="inputPublicationStatus" name="publication_status">
                            <option>---Select Publication Status---</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="btn" class="btn btn-success btn-block">Save Category Info</button>
                    </div>
                </div>
            </form>



@endsection