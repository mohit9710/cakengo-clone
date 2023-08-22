@extends('layouts.admin')
@section('title', 'Sub category')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub-Category List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#text"><i class="glyphicon glyphicon-plus"></i> Add Sub-Category</button>
              <div class="modal fade" id="text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                 <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">ADD Sub Category</h4>
                  </div>
                    <div class="modal-body">
                      <form role="form" action="{{route('sub_category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <label>Category:</label>
                        <Select class="form-control" name="category_id" required="required">
                          @foreach($category as $row)
                          <option value="{{$row->id}}">{{$row->category}}</option>
                          @endforeach
                        </Select>

                        <label>Sub Category:</label>
                        <input type="text" class="form-control" name="sub_category" required="required" placeholder="Enter Category Type">

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
                <h3 class="card-title">All Sub-Categories</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Sno.</th>
                      <th>Category</th>
                      <th>Sub Category</th>
                      <th>Created At</th>
                      <th>Updated At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($data as $data)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$data->category_name}}</td>
                          <td>{{$data->sub_category}}</td>
                          <td>{{$data->created_at}}</td>
                          <td>{{$data->updated_at}}</td>
                          <td>

                            <!-- Edit Button -->
                          <button class="btn btn-primary" data-toggle="modal" data-target="#t{{$data->id}}"><i class="glyphicon glyphicon-edit"></i>Edit </button>
                        

                           <div class="modal fade" id="t{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                             <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit Sub Category</h4>
                              </div>
                              <div class="modal-body">
                                <form role="form" action="{{route('sub_category.update',$data->id)}}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')

                                  <label>Category:</label>
                                  <Select class="form-control" name="category_id" required="required">
                                      @foreach($category as $row)
                                          @if($data->category_id == $row->id)
                                            <option value="{{$row->id}}" selected>{{$row->category}}</option>
                                          @else
                                            <option value="{{$row->id}}">{{$row->category}}</option>
                                          @endif
                                      @endforeach
                                  </Select>

                                  <label>Sub Category:</label>
                                  <input type="text" class="form-control" name="sub_category" required="required" value="{{$data->sub_category}}"> 
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