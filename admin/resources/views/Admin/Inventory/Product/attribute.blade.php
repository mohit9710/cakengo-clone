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
              <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>  
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
           <div class="col-xs-12">
      <div class="box box-primary">
         <ul class="nav nav-tabs">
            <li><a href="{{route('product.edit',$id)}}">Edit Product</a></li>
            <li><a href="{{route('product_size.edit',$id)}}">Product Size</a></li>
            <!-- <li class="active"><a href="{{route('product_size.show',$id)}}">Product Atribute</a></li> -->
            <li><a href="{{route('stock.edit',$id)}}">Stock</a></li>
            <li><a href="{{route('product.show',$id)}}">File</a></li>
         </ul>
         <!-- /.box-header -->
         <!-- form start -->
         <form role="form" action="{{route('product_size.create')}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('GET')
          <input type="hidden" name="id" value="{{$id}}">
            <div class="box-body">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Attribute</label>
                      <select class="form-control" name="attribute">
                          <option>Color</option>
                      </select>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="form-group">
                     <label>Type</label>
                     <select class="form-control" name="type">
                          <option>Yellow</option>
                          <option>White</option>
                          <option>Black</option>
                      </select>
                  </div> 
               </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </form>
      </div>
   </div>
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
                        <th>Attribute</th>
                        <th>Type</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                 <tbody>
                 
                     @foreach($data as $datas)

                      <tr>
                        <td>{{$datas->atribute}}</td>
                        <td>{{$datas->type}}</td>
                        <td>
                          <a href="">
                            <form action="{{route('product_size.destroy',$datas->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                              <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-trash"></i></button>
                            </form>
                          </a>
                        </td>
                      </tr>

                    @endforeach
                     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection


<script type="text/javascript">
   function sizes(element){
    var sizes = $(element).val();    
    if(sizes){
        $.ajax({
           type:"GET",
           url:"{{URL::to('price')}}/"+sizes+'/',
           success:function(res){               
            if(res){
                if (res.length == 0) {
                   $("#default_size").empty();
                   $("#size_type").empty();
                   $("#size_type").append('<option>None</option>');
                   $("#default_size").append('<option>None</option>');
                }
                else
                {
                    $("#default_size").empty();
                    $("#default_size").append('<option>Select Default Size</option>');
                    $("#size_type").empty();
                    $.each(res,function(key,value){
                        $("#size_type").append('<option value="'+key+'">'+key+''+value+'</option>');
                    });
                    $.each(res,function(key,value){
                        $("#default_size").append('<option value="'+key+'">'+key+''+value+'</option>');
                    });
                }   
            }
           }
        });
    }     
    };
</script>
