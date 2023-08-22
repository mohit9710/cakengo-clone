 
 @extends('layouts.app')

 @section('page-css')
  <style>
      .button
      {
        background: transparent;
        border: none;
      }
  </style>
 @endsection

 @section('content')
 	  <main>
            <div class="main-part">

                <section class="breadcrumb-nav">
                    <div class="container">
                        <div class="breadcrumb-nav-inner">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shopcart">Shop</a></li>
                                <li class="active"><a href="#">Shop Cart</a></li>
                            </ul>
                            <label class="now">SHOP CART</label>
                        </div>
                    </div>
                </section>

                <!-- Start Shop Cart -->   

                <section class="default-section shop-cart bg-grey">
                    <div class="container-fluid">
                        <div class="checkout-wrap wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <ul class="checkout-bar">
                                <li class="active">Shopping Cart</li>
                                <li>Checkout</li>
                                <li>Order Placed</li>
                            </ul>
                        </div>
                        <div class="shop-cart-list wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <table class="shop-cart-table">
                                <thead>
                                    <tr>
                                        <th>PRODUCT</th>
                                        <th>PRICE</th>
                                        <th>WEIGHT</th>
                                        <th>CAKETYPE</th>
                                        <th>MESSAGE ON CAKE</th>
                                        <th>MESSAGE ON GIFT</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@php $total = 0; $subtotal = 0 ; @endphp
                                    
                                      @foreach( $carts as $cart)
                                      @php $total = $cart->price; @endphp
                                       <tr>
                                        <th>PRODUCT</th>
                                        <td>
                                            <div class="product-cart">
                                                <img src="{{Config::get('app.admin_url')}}/img/product/" alt="">
                                            </div>
                                            <div class="product-cart-title">
                                                <span> {{$cart->title}}</span>
                                            </div>
                                        </td>
                                        <th>PRICE</th>
                                        <td>
                                            <strong>₹ <span id="price{{$cart->id}}">{{$cart->price}}</span></strong>
                                            <!-- <del>$5400.00</del> -->
                                        </td>
                                        <th>WEIGHT</th>
                                        <td>
                                          {{$cart->weight}}
                                        </td>
                                        <td>{{$cart->caketype}}</td>
                                        <td>{{$cart->cakemassage}}</td>
                                        <td>{{$cart->giftmassage}}</td>
                                        <th>TOTAL</th>
                                        <td>
                                            <span>₹ &nbsp;<span id="total{{$cart->id}}">{{$total}}</span></span>
                                        </td>
                                        <td class="shop-cart-close">
                                         <a href="{{URL::to('cartdel',$cart->id)}}">
                                          <i class="icon-cancel-5"></i>
                                         </a>
                                        </td>
                                      </tr>
                                    @php $subtotal += $cart->price; @endphp 
                                    @endforeach
                                </tbody>
                            </table>
                           <!--  <div class="product-cart-detail">
                                <div class="cupon-part">
                                    <input type="text" name="coupon" placeholder="Coupon Code" id="coupon">
                                </div>
                                <button type="submit" id="submit_coupon" class="btn-medium btn-dark-coffee">
                                 Apply Coupon
                                </button>
                            </div> -->
                        </div>
                        <div class="cart-total wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                            <div class="cart-total-title">
                                <h5>CART TOTALS</h5>
                            </div>
                            <div class="grand-total">
                                <h5>TOTAL PRICE <span>₹ &nbsp;<span id="final_amount"> {{$subtotal}}</span></span></h5>
                            </div>
                            <div class="proceed-check">
                                <a href="{{URL::to('checkout')}}" class="btn-primary-gold btn-medium">PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- End Shop Cart -->

            </div>
        </main> 
 @endsection

 @section('page-js')
      <script>
           function minus(id)
           {
              var q = '#qty'+id;
              var t = '#total'+id;
              var p = '#price'+id;
              var quantity = $(q).val();
              var price = $(p).text();
              var qty = parseInt(quantity) - 1;
               if (qty == 0) 
               {
                qty = 1;
               }
              var total_amt = qty * price; 
              $(t).text(total_amt);
              $(q).val(qty);

              $.ajax({
                  url: "{{URL::TO('quantity')}}",
                  type: 'post',
                  dataType: 'json',
                  data: { 
                          "_token": "{{ csrf_token() }}",
                          id          : id,
                          qty         : qty,
                  },
                }); 

                var ids = [];
                 @foreach($carts as $data)
                  ids.push("{{$data->id}}");
                 @endforeach


                var length=ids.length;
                var total_amount = 0;
                for(i=0; i<length; i++)
                {
                 var total = "#total"+ids[i];
                 total_amount = (total_amount + parseInt($(total).text()));
                }
                  $('#final_amount').text(total_amount);    
           }
      </script>

       <script>
           function plus(id)
           {
              var q = '#qty'+id;
              var t = '#total'+id;
              var p = '#price'+id;
              var quantity = $(q).val();
              var price = $(p).text();
              var qty = parseInt(quantity) + 1;
              var total_amt = qty * price; 
              $(t).text(total_amt);
              $(q).val(qty);

              $.ajax({
                  url: "{{URL::TO('quantity')}}",
                  type: 'post',
                  dataType: 'json',
                  data: { 
                          "_token": "{{ csrf_token() }}",
                          id          : id,
                          qty         : qty,
                  },
                }); 

                var ids = [];
                 @foreach($carts as $data)
                  ids.push("{{$data->id}}");
                 @endforeach


                var length=ids.length;
                var total_amount = 0;
                for(i=0; i<length; i++)
                {
                 var total = "#total"+ids[i];
                 total_amount = (total_amount + parseInt($(total).text()));
                }
                  $('#final_amount').text(total_amount);        
           }
      </script>


    <script>
           $('#submit_coupon').click(function(){
                    var coupon = $('#coupon').val();
                     
                     $.ajax({
                           url: "{{URL::TO('coupon')}}",
                          type: 'post',
                          dataType: 'json',
                          data: { 
                                  "_token": "{{ csrf_token() }}",
                                  coupon        : coupon,
                          },
                            success:function(result){
                               if (result['data'] == 0 ) {
                                $('#apply').text('(Coupon is not valid)');
                                $('#apply').css('color','red');
                               } else{
                                 var offertype = result['offer_type'];
                                 var value = result['value'];

                                  if (offertype == 'Percentage') {
                                    $('#total_order').text(parseInt(total_order) - parseInt(total_order * value / 100));
                                    $('#apply').text('(Coupon Applied)');
                                    $('#apply').css('color','green');
                                    $('#disc').text('You got '+value+' % discount');
                                    $('#disc').css("display","");
                                    $('#disc').css("color","blue");
                                  }else{
                                    $('#total_order').text(parseInt(total_order) - parseInt(value));
                                    $('#apply').text('(Coupon Applied)');
                                    $('#apply').css('color','green');
                                    $('#disc').text('You got discount of '+value+' Rs.');
                                    $('#disc').css("display","");
                                    $('#disc').css("color","blue");
                                  }
                                //$('#total_order').text( total_order - coupon);
                               }
                            }
                        });

                       
                });
      </script>
 @endsection