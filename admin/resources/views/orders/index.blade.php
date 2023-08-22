@extends('layouts.admin')
@section('title', 'Orders List')
@section('content')

<section class="content-header">
  <h1>
   View Orders List
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">

    <div class="col-xs-12">
      <div class="box" style="overflow-y: scroll;">
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @php $i=1; @endphp
              @foreach ($data as $datas)

                <tr>
                  <td>
                    {{$i++}}
                  </td>
                  <td>
                    {{$datas->name}}
                  </td> 
                  <td>
                    {{$datas->mobile}}
                  </td> 
                   <td>
                    @if($datas->status == 1)
                      Delivered
                    @elseif($datas->status == 0)
                      Processing
                   @elseif($datas->status == -2)
                      Reject
                    @else
                      New
                    @endif  
                  </td>
                  <td>
                    {{$datas->total_price}}
                  </td>
                  <td>
                    <a href="{{route('orders.edit',$datas->id)}}" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-print"></i></a>
                           <!-- Edit Button -->
                <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#{{$datas->id}}"><i class="glyphicon glyphicon-edit"></i></button>
                 <div class="modal fade" id="{{$datas->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                   <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Order Details</h4>
                    </div>
                    <div class="modal-body">
                     
                        @php
                          $cart = DB::table('checkout_carts')->join('products','products.id','checkout_carts.product_id')
                                                             ->where('checkout_id',$datas->id)
                                                             ->get();
                        @endphp
                        <table id="example1" class="table table-bordered table-striped">
                            <tr>
                                <th>Product Name</th>
                                <th>Qty</th> 
                                <th>Size</th>
                              </tr>
                            @foreach($cart as $carts)
                              
                              <tr>
                                <td>{{$carts->title}}</td>
                                 <td>{{$carts->qty}}</td>
                                 <td>{{$carts->size}}</td>
                              </tr>
                            @endforeach
                        </table>
                        <form action="{{route('orders.store')}}" method="post">
                          @csrf
                          <label>Order Status</label>
                          <input type="hidden" name="checkout_id" value="{{$datas->id}}">
                          <select class="form-control" name="status">
                            <option value="0">Processing</option>
                            <option value="1">Complete</option>
                            <option value="-2">Reject</option>
                          </select>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="Submit" class="btn btn-primary" >Submit</button>
                            </form>
                          </div>
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
    <div class="footer">
        {{$data->links()}}
    </div>
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>

@endsection