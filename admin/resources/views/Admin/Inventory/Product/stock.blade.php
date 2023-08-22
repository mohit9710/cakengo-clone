<title>Product List</title>
@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Product Stock List</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <!-- <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>   -->
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
         <div class="row">
            <div class="col-md-12">
               <div class="card card-primary">
                  <div class="card-header">
                        <ul class="nav nav-tabs">
                           <li class="m-1"><a href="{{route('product.edit',$id)}}">Edit Product</a></li>
                           <li class="m-1"><a href="{{route('product_size.edit',$id)}}">Product Size</a></li>
                           <!-- <li><a href="{{route('product_size.show',$id)}}">Product Atribute</a></li> -->
                           <li class="active m-1"><a href="{{route('stock.edit',$id)}}">Stock</a></li>
                           <li class="m-1"><a href="{{route('product.show',$id)}}">File</a></li>
                        </ul>
                  </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                  <div class="container-fluid">
                    <form role="form" action="{{route('stock.store')}}" method="post" enctype="multipart/form-data">
                           @csrf
                           <input type="hidden" name="id" value="{{$id}}">
                           <div class="box-body">
                              <div class="col-md-4">
                                 <div class="form-group" data-select2-id="13">
                                    <label>Select Size</label>
                                    <select class="form-control select2 select2-hidden-accessible" data-select2-id="7" tabindex="-1" aria-hidden="true" style="width: 100%" name="size">
                                       @foreach($size as $size)
                                       <option value="{{$size->id}}">{{$size->weight}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Credit</label>
                                    <input type="number" name="credit" class="form-control" required placeholder="Enter Product Weight">
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
                  <!-- /.card-header -->   
            </div>
            <div class="col-md-12">
              <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Stock List</h3>
                    </div>
                    <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Size</th>
                              <th>Credit</th>
                              <th>Debit</th>
                              <th>Created At</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($data as $datas)
                           <tr>
                              <td>{{$datas->size}}</td>
                              <td>{{$datas->credit}}</td>
                              <td>{{$datas->debit}}</td>
                              <td> {{$datas->created_at}} </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                    </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
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
      </div>
      <!-- /.container-fluid -->
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