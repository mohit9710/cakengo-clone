<title>Order List</title>
@extends('layouts.admin')
@section('content')
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#{{$data->id}}</small><br><p>Status:
            @if($data->status == 1)
                      Delivered
                    @elseif($data->status == 0)
                      Processing
                   @elseif($data->status == -2)
                      Reject
                    @else
                      Pending
                    @endif 
          </p>
      </h1>
    </section>
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header"></i><img src="" height="50">
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Cakes On Go</strong><br>
            309, Sec 42,<br>
             Gurugram,
            <!-- NIT FARIDABAD, Haryana-121001 -->
            <br>
            Phone: 798 204 1689<br>
            <!-- Email: care@citystore24.com<br> -->
            <a href="http://cakesongo.com/" target="_blank">Website : http://cakesongo.com/</a><br>
          </address>
        </div>
        <!-- /.col -->
       <div class="col-sm-4 invoice-col">
          <strong>Delivey Address</strong>
          <address>
            <strong>{{$data->name}}</strong><br>
            {{$data->address}},
            <br>{{$data->pincode}}<br>
            Phone: {{$data->mobile}},{{$data->phone}}<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
           <strong>Invoice Details</strong>
          <address>
            <strong>Order Date:</strong>  {{$data->created_at}}<br>
            <strong>Payment Method:</strong> Online<br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Sno</th>
              <th>Product</th>
              <th>Qty</th>
              <th>Price Details</th>
            </tr>
            </thead>
            <tbody>
                @php $i =1 ; $weight = 0; @endphp
                 @foreach($cart as $carts)
                              
                              <tr>
                                <td>{{$i++}}</td>
                                <td>{{$carts->size}}</td>
                                 <td>{{$carts->qty}}</td>
                                 <td>{{$carts->price}}</td>
                              </tr>
                @endforeach
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead"></p>

         
        </div>
        <!-- /.col -->
        <div class="col-xs-6">

          <div class="table-responsive">
            <table class="table">
              <tbody>
              <tr>
                <th style="width:50%">Delivery Charges:</th>
                <td>{{$data->delivery_charges}}</td>
              </tr>
              <tr>
                <th style="width:50%">Total:</th>
                <td>{{$data->total_price}}</td>
              </tr>
            </tbody></table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button onclick="myFunction()" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
@endsection

<script type="text/javascript">
  function  myFunction (){
    window.print()
  }
</script>