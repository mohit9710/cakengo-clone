@extends('layouts.admin')
@section('title', 'category')
@section('content')

<section class="content-header">
  <h1>
   View Category
  </h1>
  <ol class="breadcrumb">
    <button class="btn btn-primary" data-toggle="modal" data-target="#text"><i class="glyphicon glyphicon-plus"></i> </button>
  </ol>
</section>
<br>

<!-- Main content -->
<section class="content">
  <div class="row">

    <div class="col-xs-12">
      <div class="box" style="overflow-y: scroll;">
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Category</th>
                <th>Type</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @php $i=1; @endphp
              @foreach ($data as $data)

              <tr>
                <td>{{$i++}}</td>
                <td>{{$data->category}}</td>
                <td>{{$data->type}}</td>
                <td>{{$data->description}}</td>
                <td><img src="{{URL::to('img/category/'. $data->image)}}" style="height: 30px"></td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->updated_at}}</td>
                <td>

                  <!-- Edit Button -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#{{$data->id}}"><i class="glyphicon glyphicon-edit"></i> </button>
                 <div class="modal fade" id="{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                   <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action="{{route('category.update',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" value="{{$data->id}}">

                        <label>Category Name:</label>
                        <input type="text" class="form-control" name="category" required="required" value="{{$data->category}}">

                        <label>Type</label>
                        <input type="text" class="form-control" name="type" required="required" placeholder="Enter Menu No" value="{{$data->type}}">

                        <label>Description:</label>
                        <input type="text" class="form-control" name="description" required="required" value="{{$data->description}}">

                        <label>Upload Image:</label>
                        <input type="file" class="form-control" name="image" accept="image/*">

                        <div class="form-group">                   
                          <div class="row">
                            <div class="col-md-2">
                              <img src="{{URL::to('img/category/')}}/{{$data->image}}" style="width: 100px; margin: 5px 5px; border: 1px solid #367fa9; padding: 2px;">
                            </div>
                          </div>
                        </div>  
                        <label></label>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" value="submit">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </td>
            </tr>

            @endforeach  

          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>

@endsection