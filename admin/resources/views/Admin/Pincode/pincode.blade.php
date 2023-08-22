@extends('layouts.admin')
@section('title', 'Pincode')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pincode List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb">
               <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#text"><i class="glyphicon glyphicon-plus"></i> Add Pincode</button>
              <div class="modal fade" id="text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                 <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">ADD Pincode</h4>
                  </div>
                    <div class="modal-body">
                      <form role="form" action="{{route('pincode.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <label>Pincode:</label>
                        <input type="text" class="form-control" name="pincode" maxlength="6" required="required" > 

                        <label>Delivery Days:</label>
                        <input type="text" class="form-control" name="delivery_time" required="required"  maxlength='6' placeholder="Enter Delivery Days" >

                        <label>Max Amount:</label>
                        <input type="text" class="form-control" name="max_delivery_charge" required="required"  maxlength='6' placeholder="Enter Max Amount" >

                         <label>Delivery Charge:</label>
                         <input type="text" class="form-control" name="delivery_charge" required="required"  maxlength='6' >

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
                <h3 class="card-title">All Delivery Pincodes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Pincode</th>
                <th>Max Delivery Charge</th>
                <th>Delivery Charge</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @php $i=1; @endphp
              @foreach ($pincodes as $data)

              <tr>
                <td>{{$i++}}</td>
                <td>{{$data->pincode}}</td>
                <td>{{$data->max_delivery_charge}}</td>
                <td>{{$data->delivery_charge}}</td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->updated_at}}</td>
                <td>

                  <!-- Edit Button -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#op{{$data->id}}"><i class="fa fa-edit fa-3"></i></button>
                <a href="{{route('pincode.delete',$data->id)}}" class="btn btn-danger"><i class="fa fa-trash fa-3"></i></a>

                 <div class="modal fade" id="op{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                   <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Edit Pincode</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action="{{route('pincode.update',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <label>Pincode:</label>
                        <input type="text" class="form-control" name="pincode" maxlength="6" required="required" value="{{$data->pincode}}"> 

                        <label>Delivery Days:</label>
                        <input type="text" class="form-control" name="delivery_time" required="required"  maxlength='6' placeholder="Enter Delivery Days" value="{{$data->delivery_time}}">

                        <label>Max Amount:</label>
                        <input type="text" class="form-control" name="max_delivery_charge" required="required"  maxlength='6' placeholder="Enter Max Amount" value="{{$data->max_delivery_charge}}">

                         <label>Delivery Charge:</label>
                         <input type="text" class="form-control" name="delivery_charge" required="required"  maxlength='6' value="{{$data->delivery_charge}}">

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