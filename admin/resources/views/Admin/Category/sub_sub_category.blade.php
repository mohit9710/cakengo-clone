@extends('layouts.admin')
@section('title', 'Sub Sub Category')
@section('content')

<section class="content-header">
  <h1>
   View Sub Sub Category
  </h1>
  <ol class="breadcrumb">
    <button class="btn btn-primary" data-toggle="modal" data-target="#text"><i class="glyphicon glyphicon-plus"></i> </button>
    <div class="modal fade" id="text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">ADD Sub Sub Category</h4>
        </div>
          <div class="modal-body">
            <form role="form" action="{{route('sub_sub_category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
				@method('POST')

				<label>Category:</label>
				<Select class="form-control" name="category_id" id="category_id" onchange="get_sub_category(this)" required="required">
          <option value="">Select Category</option>
					@foreach($category as $row)
					<option value="{{$row->id}}">{{$row->category}}</option>
					@endforeach
				</Select>

				<label>Sub Category:</label>
				<Select class="form-control" name="sub_category" id="sub_service" required="required">
				</Select>

				<label>Sub Sub Category:</label>
				<input type="text" class="form-control" name="sub_sub_category" required="required" placeholder="Enter Category Type">

				<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

				<button type="submit" class="btn btn-primary" value="submit">Submit</button>
				</div>
            </form>
          </div>
      </div>
    </div>
  </ol>
</section>
<br>

<!-- Main content -->
<section class="content">
  <div class="row">

    <div class="col-xs-12">
      <div class="box" style="overflow-y: scroll;">
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Category</th>
                <th>Sub Category</th>
                <th>Sub Sub Category</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach ($data as $data)

              <tr>
                <td>{{$i++}}</td>
                <td>{{$data->category}}</td>
                <td>{{$data->sub_category}}</td>
                <td>{{$data->sub_sub_category}}</td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->updated_at}}</td>
                <td>
                	<a href="{{route('sub_sub_category.show',$data->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
              </td>
            </tr>

            @endforeach  

          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>


<script type="text/javascript">
 function get_sub_category(element){
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

@endsection