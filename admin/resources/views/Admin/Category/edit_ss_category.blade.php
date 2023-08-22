@extends('layouts.admin')
@section('title', 'Edit Sub Sub Category')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Edit Sub Sub Category
	</h1>
</section>

<!-- create  blog -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- blog element -->
			<div class="box box-primary">

				<!-- form start -->
				<form role="form" action="{{route('sub_sub_category.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
					<div class="box-body">

						<label>Category:</label>
						<Select class="form-control" name="category_id" id="category_id" onchange="get_sub_category(this)" required="required">
							@foreach($category as $row)

								@if($data->category == $row->id)
									<option value="{{$row->id}}">{{$row->category}}</option>
								@else
									<option value="{{$row->id}}">{{$row->category}}</option>
								@endif
							@endforeach
						</Select>

						<label>Sub Category:</label>
						<Select class="form-control" name="sub_category" id="sub_service" required="required">
							<option value="{{$data->sub_category_id}}">{{$data->sub_category}}</option>

						</Select>

                        <label>Sub Sub Category:</label>
                        <input type="text" class="form-control" name="sub_sub_category" required="required" value="{{$data->sub_sub_category}}">

                        <br>
						<button type="submit" class="btn btn-primary" value="submit">Update</button>
					</div>
					<!-- /.box-body -->
				</form>


			</div>
		</div>       
	</div>

</section>
<!-- end create blog -->

<script type="text/javascript">
 function get_sub_category(element){
   var category = $(element).val();    
   if(category){
     $.ajax({
        type:"GET",
        url:"{{URL::to('sub_sub_category')}}/"+category+'/edit',
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
@endsection
