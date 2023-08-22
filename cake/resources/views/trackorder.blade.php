 @extends('layouts.app')

  @section('content')
    <main>
            <div class="main-part">

                <section class="breadcrumb-nav">
                    <div class="container">
                        <div class="breadcrumb-nav-inner">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li class="active"><a href="#">Shop Cart</a></li>
                            </ul>
                            <label class="now">SHOP CART</label>
                        </div>
                    </div>
                </section>

                <!-- Start Shop Cart -->   

                <section class="default-section shop-cart bg-grey">
                    <div class="container">
                      
                        <div class="track-oder wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                           <h3 class="text-left">Order History</h3>
                            <div class="">
                                <table class="table table col-md-12">
                                	<thead>
                                		<tr>
                                			<th>Transaction Type</th>
                                			<th>Delivery Charges</th>
                                			<th>Total Price</th>
                                			<th>Discount</th>
                                			<th>Order Status</th>
                                			<th>Action</th>
                                		</tr>
                                	</thead>
                                	<tbody>
                                	 @foreach( $orders as $order )
                                		<tr>
                                			<td class="text-left">{{$order->transaction_id}}</td>
                                			<td class="text-left">{{$order->delivery_charges}}</td>
                                			<td class="text-left">{{$order->total_price}}</td>
                                			<td class="text-left">{{$order->discount}}</td>
                                			<td class="text-left">
                                				 @if( $order->status == 1)
                                				  <span class="text-success bg-success">Completed</span>
                                				 @elseif( $order->status == -1)
                                				  <span class="text-warning bg-warning">Processing</span>
                                				 @else
                                				  <span class="text-danger bg-danger">Rejected</span>
                                				 @endif
                                			</td>
                                			<td class="text-left"><a href="{{URL::to('invoice',$order->id)}}" target="_blank" class="btn btn-info btn-sm">Invoice</a></td>
                                		</tr>
                                	 @endforeach
                                	</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- End Shop Cart -->

            </div>
        </main> 
  @endsection