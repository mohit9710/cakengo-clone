@extends('layouts.admin')
@section('title', 'Images')
@section('content')

<section class="content-header">
  <h1>
   Home Page Images
  </h1>
  <ol class="breadcrumb">
    
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
                <th>Images</th>
                <th>Description</th>
                <th>Offer</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @php $i=1; @endphp
              @foreach ($images as $image)

              <tr>
                <td>{{$i++}}</td>
                <td>{{$image->images}}</td>
                <td>{{$image->description}}</td>
                <td>{{$image->offer}}</td>
                <td>{{$image->created_at}}</td>
                <td>{{$image->updated_at}}</td>
                <td>

                  <!-- Edit Button -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#{{$image->id}}"><i class="glyphicon glyphicon-edit"></i> </button>

                 <div class="modal fade" id="{{$image->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                   <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Edit Images</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action="{{URL::to('image/edit')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$image->id}}">

                        <label>Description:</label>
                        <input type="text" name="description" class="form-control" value="{{$image->description}}"><br>

                        <label>Offer (%):</label>  
                        <input type="text" name="offer" class="form-control" value="{{$image->offer}}"><br>

                        <label>Upload Image:</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                        <!-- <span>{{$image->images}}</span> -->

                        <div class="form-group">                   
                          <div class="row">
                            <div class="col-md-2">
                              <img src="{{URL::to('img/home/')}}/{{$image->images}}" style="width: 100px; margin: 5px 5px; border: 1px solid #367fa9; padding: 2px;">
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