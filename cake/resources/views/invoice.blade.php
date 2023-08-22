  

  @include('layouts.css')
       <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <ol class="breadcrumb" style="margin-top: 27px;">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
    
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-md-8 invoice-col">
          From
          <address>
            <strong>Cakes On Go</strong><br>
            B- 86 Tagore Garden.<br>
             Delhi,<br>
            Phone: +91-7982041689<br>
            <!-- Email: info@almasaeedstudio.com -->
          </address>
        </div>
        <!-- /.col -->
        <div class="col-md-4 invoice-col">
          To
          <address>
            <strong>{{$address->name}}</strong><br>
            {{$address->address2}}<br>
            {{$address->city}}, {{$address->pincode}}<br>
            Phone: {{$address->mobile}}<br>
            Email: {{$address->email}}
          </address>
        </div>
        <!-- /.col -->
       <!--  <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div> -->
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Product</th>
              <th>Product Size</th>
              <th>Caketype</th>
              <th>Price</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
              @php $total = 0; @endphp
              @foreach( $products as $product )
              @php $subtotal = $product->price; @endphp
                <tr>
                  <td>{{$product->title}}</td>
                  <td>{{$product->weight}}</td>
                  <td>{{$product->caketype}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$subtotal}}</td>
                </tr>
                @php $total += $product->price; @endphp
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-md-7 pull-left">
          <p class="lead">Payment Methods : {{$order->transaction_id}}</p>
        </div>
        <!-- /.col -->
        <div class="col-md-5">
          <p class="lead"></p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>{{$total}}</td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td>{{$order->delivery_charges}}</td>
              </tr>
              <tr>
                <th>Discount:</th>
                <td>{{$order->discount}}</td>
              </tr>
              <tr>
                @php $final = ($total - $order->discount) + $order->delivery_charges; @endphp
                <th>Total:</th>
                <td>{{$final}}</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12" style="margin-bottom: 25px;">
          <a href="" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
         <!--  <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> -->
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
 @include('layouts.js')
