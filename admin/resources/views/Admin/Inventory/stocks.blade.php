@extends('layouts.admin')
@section('title', 'View Stocks')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Stocks</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>   -->
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
                <h3 class="card-title">All Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                      <tr>
                        <th>Sno.</th>
                        <th>Product Name</th>
                        <th>Size</th>
                        <th>Credit</th>
                        <th>Debit</th>
                        <th>Remaining Stocks</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($data as $data)
                          <tr>
                             <td>{{$loop->iteration}}</td>
                              <td>{{$data->title}}</td>
                              <td>{{$data->size}}</td>
                              <td>{{$data->credit}}</td>
                              <td>{{$data->debit}}</td>
                              <td>{{$data->credit-$data->debit}}</td>
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