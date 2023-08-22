<title>Product List</title>
@extends('layouts.admin')
@section('content')
 <div class="content-wrapper">


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create New Product</h1>
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
                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form role="form" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
               @csrf
            <div class="box-body row container-fluid">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="exampleInputPassword1">Category</label>
                     <select class="form-control" id="category" name="category_id" onchange="categorys(this)">
                        <option>Select Category</option>
                        @foreach($category as $key)
                        <option value="{{$key->id}}">{{$key->category}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Choose Sub Category </label>
                     <select class="form-control" id="sub_service" name="subcategory_id" required onchange="subcategoryss(this)">
                     </select>
                  </div>
               </div>
               
              <div class="col-md-6">
                  <div class="form-group">
                     <label>Meta Title</label>
                     <input type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title" >
                  </div>
               </div>


               <div class="col-md-6">
                  <div class="form-group">
                     <label>Meta Keywords</label>
                     <input type="text" class="form-control" name="meta_keywords" placeholder="Enter Meta Keywords" >
                  </div>
               </div>


               <div class="col-md-6">
                  <div class="form-group">
                     <label>Product Name</label>
                     <input type="text" class="form-control" name="title" placeholder="Enter Product Name" required="required" >
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="form-group">
                     <label>Offer Amount</label>
                     <input type="number" class="form-control" name="offer_amount" placeholder="Enter Offer Amount" required="required" >
                  </div>
               </div>

               <div class="col-md-12">
                  <div class="form-group">
                     <label for="sponser_id">Description</label>
                     <textarea class="textarea t" id="textarea" required placeholder="Place some text here" name="description" style="width:100%"></textarea>
                  </div>
               </div>

               <div class="col-md-12">
                  <div class="form-group">
                     <label for="sponser_id">Eggless Description</label>
                     <textarea class="textarea t" id="textarea" required placeholder="Place some text here for Eggless" name="egglessdescription" style="width:100%"></textarea>
                  </div>
               </div>

               <div class="col-md-12">
                  <div class="form-group">
                     <label for="sponser_id">Featured Image</label>
                      <input type="file" name="image" class="form-control" required>
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