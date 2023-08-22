@extends('layouts.admin')
@section('title', 'Training Query')
@section('content')

<section class="content-header">
  <h1>
   Training Query List
  </h1>
  <ol class="breadcrumb"> 
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
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @php $i=1; @endphp
              @foreach ($data as $data)

              <tr>
                <td>{{$i++}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->mobile}}</td>  
                <td>{{$data->date}}</td>
                <td>

                  <!-- Edit Button -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#{{$data->id}}"><i class="glyphicon glyphicon-eye"></i>View Message</button>
                 <div class="modal fade" id="{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                   <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Training Query</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action="#" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{$data->id}}">

                        <label>Name:</label>
                        <input type="text" class="form-control" value="{{$data->name}}">

                        <label>Email:</label>
                        <input type="text" class="form-control"  value="{{$data->email}}">

                        <label>Mobile:</label>
                        <input type="text" class="form-control"  value="{{$data->mobile}}">

                        <label>Address:</label>
                        <input type="text" class="form-control" value="{{$data->address}}">

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>

@endsection