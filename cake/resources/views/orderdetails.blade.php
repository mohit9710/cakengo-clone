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
                      
                       <!--  <div class="checkout-wrap checkout-wrap-more wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <ul class="checkout-bar">
                                <li class="done-proceed">Order Placed</li>
                                <li class="active">Preparing</li>
                                <li class="">Delivered</li>
                            </ul>
                        </div>
 -->
                        <div class="track-oder wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                           <h3 class="text-left">Order Details</h3>
                            <div class="">
                                <table class="table table">
                                	<thead>
                                		<tr>
                                			<th class="text-left">Product Name</th>
                                			<th class="text-left">Size</th>
                                			<th class="text-left">Quantity</th>
                                			<th class="text-left">Price</th>
                                		</tr>
                                	</thead>
                                	<tbody>
                                	 @foreach( $products as $product )
                                		<tr>
                                			<td class="text-left">{{$product->title}}</td>
                                            <td class="text-left">{{$product->weight}}</td>
                                            <td class="text-left">{{$product->qty}}</td>
                                            <td class="text-left">{{$product->price}}</td>
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