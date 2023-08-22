<title>Product List</title>
@extends('layouts.admin')
<style type="text/css">
   #internal {
   width: 200px;
   height: 100px;
   background: #999999;
   overflow: auto;
   }
</style>
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Product Images List</h1>
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
                     <li class="m-1"><a href="{{route('stock.edit',$id)}}">Stock</a></li>
                     <li class="active m-1"><a href="{{route('product.show',$id)}}">File</a></li>
                  </ul>
               </div>
               <div class="container-fluid">
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="container-fluid">
                  <form role="form" action="{{route('product_size.index')}}" method="post" enctype="multipart/form-data">
                     @csrf
                     @method('GET')
                     <input type="hidden" name="id" value="{{$id}}">
                     <div class="box-body">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>File Type</label>
                              <select class="form-control" name="file_type" onchange="files(this)">
                                 <option>Select File Type</option>
                                 <option value="1">Image</option>
                                 <option value="2">Video</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Files</label>
                              <input type="file" name="file[]" id="file" multiple="" class="form-control" required placeholder="Enter Video Embedded Code"> 
                           </div>
                        </div>
                     </div>
                     <!-- /.box-body -->
                     <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th>Files</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($data as $data)
                        <tr>
                           <td>
                              @if($data->file_type == 2)
                              <div id="internal">{!! html_entity_decode($data->files) !!}</div>
                              @else
                              <img src="{{URL::to('img/product/'.$data->files)}}" height="50">
                              @endif
                           </td>
                           <td>
                              <form action="{{route('product.destroy',$data->id)}}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>Delete</button>
                              </form>
                           </td>
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
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>
@endsection
<script type="text/javascript">
   function files(element){
    var file_type = $(element).val();
      if (file_type == 2) {
        document.getElementById('file').type = 'text';
      }
      else{
         document.getElementById('file').type = 'file';
      }
     
    };
</script>