<title>Voucher</title>
@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vouchers List</h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb">
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#text"><i class="glyphicon glyphicon-plus"></i>Add Voucher </button>
                <div class="modal fade" id="text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                   <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Voucher Offer</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action="{{route('voucher.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <label>Title:</label>
                        <input type="text" class="form-control" name="title" required="required" placeholder="Enter Title">

                        <label>Coupan:</label>
                        <input type="text" class="form-control" name="label" required="required" placeholder="Enter coupan" onkeyup="this.value = this.value.toUpperCase();">

                        
                          <label>Offertype:</label>
                          <select type="text" class="form-control" name="offer_type" required="required">
                            <option value="Fixed">Fixed</option>
                            <option value="Percentage">Percentage</option>
                          </select>
                      
                          <label>Start Date:</label>
                          <input type="date" class="form-control" name="start_date" required="required" placeholder="Enter value">

                           <label>End Date:</label>
                          <input type="date" class="form-control" name="end_date" required="required" placeholder="Enter value">


                          <label>Value:</label>
                          <input type="text" class="form-control" name="value" onkeypress="javascript:return isNumber(event)"  required="required" placeholder="Enter value">
                      
                        <label>Description:</label>
                        <input type="text" class="form-control" name="description" required="required" placeholder="Enter Description">

                        <label>Status:</label>
                        <select class="form-control" name="status">
                          <option value="1">Active</option>
                          <option value="0">InActive</option>
                        </select>
                      </div>
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
                <h3 class="card-title">Voucher </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Sno.</th>
                      <th>Title</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Coupan</th>
                      <th>Offertype</th>
                      <th>Value</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Created At</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($data as $data)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$data->title}}</td>
                          <td>{{$data->start_date}}</td>
                          <td>{{$data->end_date}}</td>
                          <td>{{$data->label}}</td>
                          <td>{{$data->offer_type}}</td>
                          <td>{{$data->value}}</td>
                          <td>{{$data->description}}</td>
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