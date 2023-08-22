@extends('layouts.admin')
@section('title', 'Pages')
@section('content')

<section class="content-header">
  <h1>
   View Pages
  </h1>
  <ol class="breadcrumb">
    <button class="btn btn-primary" data-toggle="modal" data-target="#text"><i class="glyphicon glyphicon-plus"></i> </button>
    <div class="modal fade" id="text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">ADD Pages</h4>
        </div> 
          <div class="modal-body">
            <form role="form" action="{{route('pages.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('POST')

              <label>Title:</label>
              <input type="text" class="form-control" name="title" required="required" placeholder="Enter Category ">

              <label>Meta Title:</label>
              <input type="text" class="form-control" name="metatitle" required="required" placeholder="Enter Meta Title">

               <label>Keyword:</label>
              <input type="text" class="form-control" name="keyword" required="required" placeholder="Enter Keyword">

              <label>Address:</label>
              <input type="text" class="form-control" name="address" required="required" placeholder="Enter Address">

              <label>Mobile:</label>
              <input type="number" class="form-control" name="mobile" required="required" placeholder="Enter Mobile Number">

              <label>Email:</label>
              <input type="email" class="form-control" name="email" required="required" placeholder="Enter Email">

              <label for="sponser_id">Description</label>
              <textarea class="textarea t" id="textarea" required placeholder="Place some text here" name="description" style="width:100%"></textarea>

              <label>Upload Image:</label>
              <input type="file" class="form-control" name="image" required="required" accept="image/*">

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
              </div>
            </form>
          </div>
      </div>
    </div>
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
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
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
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td>
                  <img src="{{URL::to('img/pages/')}}/{{$data->image}}" style="height: 30px">
                </td>
                <td>
                    @php
                      if($data->status == 1)
                      {
                        echo 'Active';
                      }

                      else
                      {

                        echo 'Inactive';
                      }
                    @endphp
                </td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->updated_at}}</td>
                <td>

                  <!-- Edit Button -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#{{$data->id}}"><i class="glyphicon glyphicon-edit"></i> </button>

                <a href="{{route('pages.edit',$data->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-off"></i></a>
                 <div class="modal fade" id="{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                   <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Edit Pages</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action="{{route('pages.update',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <label>Title:</label>
                        <input type="text" class="form-control" name="title" required="required" placeholder="Enter Category " value="{{$data->title}}">


                        <label>Meta Title:</label>
                        <input type="text" class="form-control" name="metatitle" required="required" value="{{$data->meta_title}}">

                         <label>Keyword:</label>
                        <input type="text" class="form-control" name="keyword" required="required" value="{{$data->keyword}}">

                         <label>Address:</label>
                         <input type="text" class="form-control" name="address" required="required" placeholder="Enter Address" value="{{$data->address}}">

                         <label>Mobile:</label>
                         <input type="number" class="form-control" name="mobile" required="required" placeholder="Enter Mobile Number" value="{{$data->mobile}}">

                         <label>Email:</label>
                         <input type="email" class="form-control" name="email" required="required" placeholder="Enter Email" value="{{$data->email}}">

                        <label for="sponser_id">Description</label>
                         <textarea class="textarea t" id="textarea" required placeholder="Place some text here" name="description" style="width:100%">{{$data->description}}</textarea>

                        <label>Upload Image:</label>
                        <input type="file" class="form-control" name="image" accept="image/*">

                        <div class="form-group">                   
                          <div class="row">
                            <div class="col-md-2">
                              <img src="{{URL::to('img/pages/')}}/{{$data->image}}" style="width: 100px; margin: 5px 5px; border: 1px solid #367fa9; padding: 2px;">
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