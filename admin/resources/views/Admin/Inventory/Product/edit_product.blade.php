<title>Product List</title>
@extends('layouts.admin')
@section('content')
 <div class="content-wrapper">


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <a href="{{route('product.index')}}" class="btn btn-primary">View Product </a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <ul class="nav nav-tabs">
                  <li class="active m-1"><a href="#activity" data-toggle="tab" aria-expanded="true">Edit Product</a></li>
                  <li class="m-1"><a href="{{route('product_size.edit',$product->id)}}">Product Size</a></li>
                  <!-- <li><a href="{{route('product_size.show',$product->id)}}">Product Atribute</a></li> -->
                  <li class="m-1"><a href="{{route('stock.edit',$product->id)}}">Stock</a></li>
                  <li class="m-1"><a href="{{route('product.show',$product->id)}}">File</a></li>
                </ul>
                <!-- <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3> -->
              </div>

              <!-- /.card-header -->
              <!-- form start -->
             <form role="form" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="box-body row container-fluid">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="exampleInputPassword1">Category</label>
                           <select class="form-control" id="category" name="category_id" onchange="categorys(this)">
                              <option>Select Category</option>
                              @foreach($category as $key)
                                @if($key->id == $product->category_id)
                                 <option selected value="{{$key->id}}">{{$key->category}}</option>
                                @else
                                   <option value="{{$key->id}}">{{$key->category}}</option>
                                @endif
                              @endforeach
                           </select>

                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Choose Sub Category </label>
                           <select class="form-control" id="sub_service" name="subcategory_id" required onchange="subcategoryss(this)">
                                 @foreach($sub_category as $key)
                                        <option selected value="{{$key->id}}">{{$key->sub_category}}</option>
                                 @endforeach
                           </select>
                        </div>
                     </div>
                     
                       <div class="col-md-6">
                        <div class="form-group">
                           <label>Meta Title</label>
                           <input type="text" class="form-control" name="meta_title" placeholder="Enter Product Name" required="required"  value="{{$product->meta_title}}">
                        </div>
                     </div>


                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Meta Keywords</label>
                           <input type="text" class="form-control" name="meta_keywords" placeholder="Enter Product Name" required="required"  value="{{$product->meta_keyword}}">
                        </div>
                     </div>
                     
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Product Name</label>
                           <input type="text" class="form-control" name="title" placeholder="Enter Product Name" required="required" value="{{$product->title}}">
                        </div>
                     </div>

                      <div class="col-md-6">
                        <div class="form-group">
                           <label>Offer Amount</label>
                           <input type="number" class="form-control" name="offer_amount" placeholder="Enter Offer Amount" required="required" value="{{$product->offer_amount}}" >
                        </div>
                     </div>

                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="sponser_id">Description</label>
                           <textarea class="textarea t" id="textarea" required placeholder="Place some text here" name="description" style="width:100%">{{$product->description}}</textarea>
                        </div>
                     </div>

                      <div class="col-md-12">
                        <div class="form-group">
                           <label for="sponser_id">Eggless Description</label>
                           <textarea class="textarea t" id="textarea" required placeholder="Place some text here for Eggless" name="egglessdescription" style="width:100%">{{$product->eggless_description}}</textarea>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="sponser_id">Featured Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <span><img src="{{URL::to('img/product')}}/{{$product->main_image}}" height="50"></span>
                     </div>

                      <div class="col-md-6">
                        <div class="form-group">
                           <label for="sponser_id">Product Status</label>
                            <select class="form-control" name="status">

                              @if($product->status == 1)
                                  <option value="1">Active</option>
                                  <option value="0">DeActive</option>
                              @else
                                  <option value="0">DeActive</option>
                                  <option value="1">Active</option>
                              @endif
                                
                            </select>
                        </div>
                     </div>

                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary ml-2">Submit</button>
                  </div>
               </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

</div>
@endsection

<script type="text/javascript">
   function categorys(element){
    var category = $(element).val();    
    if(category){
        $.ajax({
           type:"GET",
           url:"{{URL::to('sub_category')}}/"+category+'/edit',
           success:function(res){               
            if(res){
                $("#sub_service").empty();
                $("#sub_service").append('<option>Select Sub Category</option>');
                $.each(res,function(key,value){
                    $("#sub_service").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }
           }
        });
    }     
    };
</script>

<script type="text/javascript">
   function subcategoryss(element){
    var subcategorys = $(element).val();    
    if(subcategorys){
        $.ajax({
           type:"GET",
           url:"{{URL::to('sub_sub_category')}}/"+subcategorys+'/edit',
           success:function(res){               
            if(res){
                $("#subsubcategory").empty();
                $("#subsubcategory").append('<option>Select Sub Category</option>');
                $.each(res,function(key,value){
                    $("#subsubcategory").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }
           }
        });
    }     
    };
</script>