@extends('layouts.admin')
@section('title', 'Banner')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#text"><i class="glyphicon glyphicon-plus"></i>Add Banner </button>
              <div class="modal fade" id="text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                 <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">ADD Category</h4>
                  </div>
                    <div class="modal-body">
                      <form role="form" action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <label>Title:</label>
                        <input type="text" class="form-control" name="title" required="required" placeholder="Enter Title ">

                        <label>Type:</label>
                        <input type="text" class="form-control" name="type" required="required" placeholder="Enter Type ">

                        <label>Short Description:</label>
                        <input type="text" class="form-control" name="short_description" required="required" placeholder="Enter Short Description ">

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
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Banners</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
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
                     @foreach($data as $data)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->short_description}}</td>
                        <td><img src="{{URL::to('img/banner/'. $data->image)}}" style="height: 30px"></td>
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
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#t{{$data->id}}"><ion-icon name="create-outline"></ion-icon> </button>

                        <a href="{{route('banner.edit',$data->id)}}" class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></i></a>
                        <div class="modal fade" id="t{{$data->id}}">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Banner</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form role="form" action="{{route('banner.update',$data->id)}}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')

                                  <label>Title:</label>
                                  <input type="text" class="form-control" name="title" required="required" placeholder="Enter Category " value="{{$data->title}}">

                                  <label>Description:</label>
                                  <input type="text" class="form-control" name="description" required="required" value="{{$data->short_description}}">

                                  <label>Upload Image:</label>
                                  <input type="file" class="form-control" name="image" accept="image/*">

                                  <div class="form-group">                   
                                    <div class="row">
                                      <div class="col-md-2">
                                        <img src="{{URL::to('img/banner/')}}/{{$data->image}}" style="width: 100px; margin: 5px 5px; border: 1px solid #367fa9; padding: 2px;">
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
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>

                       
                      </td>
                    </tr>
                     @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div> -->
            </div>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection