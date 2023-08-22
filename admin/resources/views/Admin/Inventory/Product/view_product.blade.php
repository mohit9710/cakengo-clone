<title>Product List</title>
@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a class="btn btn-primary" href="{{ route('product.create') }}"> Create New Product</a>  
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
                <h3 class="card-title">All Products</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th>Sno.</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Product Name</th>
                        <th>Created At</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                 <tbody>
                 
                     @php $i=1; @endphp
                     @foreach($data as $datas)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$datas->category}}</td>
                          <td>{{$datas->sub_category}}</td>
                          <td>{{$datas->title}}</td>
                          <td>{{$datas->created_at}}</td>
                          <td><a href="{{route('product.edit',$datas->id)}}" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                        </tr>
                     @endforeach
                     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{$data->links()}}
                <!-- <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul> -->
              </div>
            </div>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

