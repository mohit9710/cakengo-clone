<title>Product | Sizes</title>
@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Product Sizes </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <!-- <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>   -->
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <ul class="nav nav-tabs ">
                  <li class="m-1"><a href="{{route('product.edit',$id)}}" data-toggle="tab" aria-expanded="true">Edit Product</a></li>
                  <li class="active m-1"><a href="#">Product Size</a></li>
                  <!-- <li><a href="{{route('product_size.show',$id)}}">Product Atribute</a></li> -->
                  <li class="m-1"><a href="{{route('stock.edit',$id)}}">Stock</a></li>
                  <li class="m-1"><a href="{{route('product.show',$id)}}">File</a></li>
                </ul>
                <!-- <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3> -->
              </div>
              <!-- form start -->
             <form role="form" action="{{route('product_size.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{$id}}">
                  <div class="box-body">
                     <!-- <div class="col-md-4">
                        <div class="form-group">
                           <label>Size</label>
                           <input type="text" name="size" class="form-control" required placeholder="Enter Product Size">
                        </div>
                        </div> -->
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Product Size</label>
                           <input type="text" name="weight" class="form-control" required placeholder="Enter Product Size">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Amount</label>
                           <input type="number" name="amount" class="form-control" required placeholder="Enter Product Amount">
                        </div>
                     </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary" style="margin-left: 10px!important;">Submit</button>
                  </div>
               </form>
            </div>
            <!-- /.card -->
        </div>
         <!-- List -->
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">All Sizes </h3>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <!-- <th>Size</th> -->
                           <th>Weight</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($productsizes as $datas)
                        <tr>
                           <!-- <td>{{$datas->size}}</td> -->
                           <td>{{$datas->weight}}</td>
                           <td>{{$datas->amount}}</td>
                           <td>
                              @if($datas->status == 1)
                              Active
                              @else
                              DeActive
                              @endif
                           </td>
                           <td>
                              <button class="btn btn-primary tbn-sm" data-toggle="modal" data-target="#text{{$datas->id}}"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                              <div class="modal fade" id="text{{$datas->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h4 class="modal-title" id="myModalLabel">Edit Price</h4>
                                       </div>
                                       <div class="modal-body">
                                          <form role="form" action="{{route('product_size.update',$datas->id)}}" method="Post" >
                                             @csrf
                                             @method('PUT')
                                             <label>Weight</label>
                                             <input type="" class="form-control" name="weight" value="{{$datas->weight}}">
                                             <label>Price</label>
                                             <input type="number" class="form-control" name="amount" value="{{$datas->amount}}" step="0.01">
                                             <label>Status</label>
                                             <select class="form-control" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">DeActive</option>
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
   </section>
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