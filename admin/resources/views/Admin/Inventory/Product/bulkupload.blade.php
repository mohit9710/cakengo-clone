
<title>Product Bulk Upload </title>
@extends('layouts.admin')
@section('content')
<div class="content-wrapper">


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Bulk Upload</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <!-- <a href="{{route('product.index')}}" class="btn btn-primary">View Product </a> -->
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
             <form role="form" action="{{URL::to('bulkupload')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="box-body">

               <div class="col-md-6">
                  <div class="form-group">
                     <label>Upload File</label>
                     <input type="file" class="form-control" name="file" >
                  </div>
               </div>               
              
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
               <button type="submit" class="btn btn-primary ml-2">Upload</button>
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