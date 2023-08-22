@extends('layouts.app')
@section('content')
<main>
   <div class="main-part">
      <section class="breadcrumb-nav">
         <div class="container">
            <div class="breadcrumb-nav-inner">
               <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="{{URL::to('checkout')}}">Shop</a></li>
                  <li class="active"><a href="#">Shop Checkout</a></li>
               </ul>
               <label class="now">SHOP CHECKOUT</label>
            </div>
         </div>
      </section>
      <!-- Start Shop Cart -->   
      <section class="default-section shop-checkout bg-grey">
         <div class="container">
            <div class="checkout-wrap wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
               <ul class="checkout-bar">
                  <li class="done-proceed">Shopping Cart</li>
                  <li class="active">Checkout</li>
                  <li>Order Placed</li>
               </ul>
            </div>
            <div class="row">
               <form class="form-checkout" name="form" method="post" action="{{URL::to('pay-now')}}" id="checkout">
                  @csrf
                  <div class="col-md-7 col-sm-7 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                     <div class="shop-checkout-left">
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <h5>Billing Details</h5>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" name="name" placeholder="First Name">
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" name="comp_name" placeholder="Company Name">
                           </div>
                           <div class="col-md-6 col-sm-12 col-xs-12">
                              <input type="email" name="email" placeholder="Email">
                           </div>
                           <div class="col-md-6 col-sm-12 col-xs-12">
                              <input type="text" name="mobile" placeholder="Phone">
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" name="state" placeholder="State">
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" name="city" placeholder="City">
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" name="pincode" id="pincode" placeholder="Pincode">
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <textarea placeholder="Address" name="address"></textarea>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <textarea placeholder="Order Notes" name="order_notes"></textarea>
                           </div>
                           <input type="hidden" name="discount" id="disc">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                     <div class="shop-checkout-right">
                        <div class="shop-checkout-box">
                           <h5>YOUR ORDER</h5>
                           <div class="shop-checkout-title">
                              <h6>PRODUCT <span>TOTAL</span></h6>
                           </div>
                           <div class="shop-checkout-row">
                              @php $subtotal = 0; @endphp
                              @foreach(  $carts as $cart)
                              <p>
                                 <span>{{$cart->title}}</span>
                                  
                                 <small>₹ {{$cart->price}}</small>
                              </p>
                              @php $subtotal +=  $cart->price; @endphp
                              @endforeach
                           </div>
                           <div class="checkout-total">
                              <h6>CART SUBTOTAL <strong><small id="subtotal">{{$subtotal}}</small></strong></h6>
                           </div>
                           <div class="checkout-total">
                              <h6>SHIPPING <small id="charge">0</small></h6>
                           </div>
                           <div class="checkout-total">
                              <h6>ORDER TOTAL <span id="total" class="price-big">{{$subtotal}}</span></h6>
                           </div>
                           <div class="checkout-total" style="display: flex;">
                              <h6 id="couponstatus"></h6>
                              <span id="discount" style="margin-left: auto;"></span>                                        
                           </div>
                        </div>
                        <div class="shop-checkout-box">
                           <h5>PAYMENT METHODS</h5>
                           <div class="payment-mode">
                              <label>
                              <input type="radio" name="paymentmethod" value="online">Online Payments
                              </label>
                           </div>
                           <div class="payment-mode">
                              <label>
                              <input type="radio" checked="" name="paymentmethod" value="cashondelivery">Cash on Delivery
                              </label>
                           </div>
                        </div>
               </form>
               <div class="shop-checkout-box">
               <div class="cupon-part">
               <input type="text" name="coupon" placeholder="Coupon Code" id="coupon">
               </div>
               </div> 
               <div class="checkout-button">
               <button class="button-default btn-large btn-primary-gold" form="checkout">PROCEED TO PAYMENT</button>
               </div>
               </div>
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
   $(document).ready(function(){
       
       $('#pincode').change(function(){
           var pin = $('#pincode').val();
             $.ajax({
                type:"GET",
                url:"{{URL::To('pincode')}}"+'/'+pin,
                 success:function(result)
                 {
                   $('#total').empty();
                   $('#charge').empty();
                   $('#total').text(result['total']);
                   $('#charge').text(result['delivery_charge']);
                 }
               });
             });
   });
</script>
<script>
   $('#coupon').change(function(){
    var coupon = $('#coupon').val();
    var total  = $('#subtotal').text();
    var charge = $('#charge').text();
    // console.log(total)
    $('#disc').val(coupon);
                
     $.ajax({
      url: "{{URL::TO('coupon')}}",
      type: 'post',
      dataType: 'json',
      data: { 
      "_token": "{{ csrf_token() }}",
      coupon        : coupon,
       },
         success:function(result){
            // console.log(result['coupon_type'])
            if (result['data'] == 0)
             {
               $('#couponstatus').text('Coupon is not valid');
               $('#couponstatus').css('color','Red');
             }
             else
             {
               if (result['coupon_type']  == 'Fixed') 
             {
               var finalamt = (total - result['value']) + parseInt(charge);
               $('#couponstatus').text('Coupon Applied');
               $('#couponstatus').css('color','Green');
               $('#discount').text('You got discount of '+result['value']+' Rs.');
               $('#discount').css('color','Black');
             }
             else
             {
               var finalamt = total - ((total * result['value'] / 100)) + parseInt(charge);
               $('#couponstatus').text('Coupon Applied');
               $('#couponstatus').css('color','Green');
               $('#discount').text('You got discount of '+result['value']+' %');
               $('#discount').css('color','Black');
             }
              $('#total').text(finalamt);
             }
             
           }
       }); 
     });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<button id="rzp-button1" hidden="">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@if($response ?? "")
<script>
   var options = {
   "key": "{{$response['razorpayId']}}", // Enter the Key ID generated from the Dashboard
   "amount": "{{$response['amount']}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
   "currency": "{{$response['currency']}}",
   "name": "{{$response['name']}}",
   "description": "{{$response['massage']}}",
   "image": "{{URL::TO('assets/img/logo1.png')}}",
   "order_id": "{{$response['orderId']}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
   "handler": function (response){
   
      $.ajax({
          url: "{{URL::TO('payment')}}",
          type: 'post',
          dataType: 'json',
          data: { 
                  "_token": "{{ csrf_token() }}",
                  rzp_payment_id      : response.razorpay_payment_id, 
                  rzp_order_id        : response.razorpay_order_id,
                  rzp_signature       : response.razorpay_signature,
                  name                : "{{$response['name']}}",
                  email               : "{{$response['email']}}",
                  mobile              : "{{$response['mobile']}}",
                  amount              : "{{$response['amount']}}",
                  address             : "{{$response['address']}}",
                  massage             : "{{$response['massage']}}",
                  disc_amount         : "{{$response['disc_amount']}}",
                  pincode             : "{{$response['pincode']}}",
          }, 
          success: function (msg) {
              // sweet alert
               swal({
                      title: "Transaction Successful",
                      text:  "Your order has been placed Successfully",
                      icon:  "success",
                      button: "ok",
                  });
              setTimeout(function(){
                  window.location.href = "{{URL::to('/')}}";
              }, 1000);
          }
      });
   
   
     },
      "prefill": {
      "name": "{{$response['name']}}",
      "email": "{{$response['email']}}",
      "contact": "{{$response['mobile']}}"
    },
      "notes": {
      "address": "{{$response['address']}}"
    },
      "theme": {
      "color": "#F37254"
   }
   };
   var rzp1 = new Razorpay(options);
   window.onload = function(){
   document.getElementById('rzp-button1').click();
   }
   document.getElementById('rzp-button1').onclick = function(e){
   rzp1.open();
   e.preventDefault();
   }
</script>
@endif
@endsection