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
            <form role="form" action="{{URL::to('image/edit')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="1">

                        <label>Description:</label>
                        <input type="text" name="description" class="form-control" value=""><br>

                        <label>Offer (%):</label>  
                        <input type="text" name="offer" class="form-control" value=""><br>

                        <label>Upload Image:</label>
                        <input type="file" class="form-control" name="image" accept="image/*">

                        <div class="form-group">                   
                          <div class="row">
                            <div class="col-md-2">
                              <img src="" style="width: 100px; margin: 5px 5px; border: 1px solid #367fa9; padding: 2px;">
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
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>

@endsection