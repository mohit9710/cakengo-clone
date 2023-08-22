@extends('layouts.app')
@section('title')
{{$single_product->title}}
@endsection
@section('page-css')
<style>
   .button
   {
   background: transparent;
   border: 0px;
   }
   input[type=number]::-webkit-inner-spin-button, 
   input[type=number]::-webkit-outer-spin-button {
   -webkit-appearance: none;
   margin: 0;
   }
   @media(min-width: 1024px){
    .foo{
      margin-top: -30px;
    }
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
                  <li><a href="{{URL::to('/')}}">Home</a></li>
                  <li class="active"><a href="#">Shop Single</a></li>
               </ul>
               <label class="now">SHOP SINGLE</label>
            </div>
         </div>
      </section>
      <!-- Start Shop Single -->   
      <section class="default-section shop-single pad-bottom-remove" style="padding-top: 50px;">
         <div class="container">
            <div class="row">
               <div class="col-md-5 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="slider slider-for slick-shop">
                     @foreach( $files as $file)
                     <div>
                        <img src="{{Config::get('app.admin_url')}}/img/product/{{$file->files}}" alt="" style="max-width: 555px; height: 363px;">
                     </div>
                     @endforeach
                  </div>
                  <div class="slider slider-nav slick-shop-thumb">
                     @foreach( $files as $file)
                     <div><img src="{{Config::get('app.admin_url')}}/img/product/{{$file->files}}" alt="" style="width: 100px; height: 76px;"></div>
                     @endforeach
                  </div>
               </div>
               <div class="col-md-7 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <!-- mycode -->
                  <h4 class="text-coffee m-0">{{$single_product->title}}</h4>
                  <p class="m-0">{{$single_product->category}}</p>
                  <h3 class="text-coffee ">₹ {{$product_size_single->amount}}</h3>
                  <div class="row">
                    <form action="{{URL::to('addtocart')}}" method="post" id="form1">
                         @csrf
                    @if($single_product->category_id == '3')
                      <div class="col-md-6">
                              <h6>Cake Type</h6>
                        <div class="social-wrap">
                           <input type="radio" name="caketype" checked="" value="egg"> Egg &nbsp;
                           <input type="radio" name="caketype" value="eggless"> Eggless
                        </div>
                     </div>
                     @endif
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-md-6">
                              @foreach( $sizes as $size)
                              <div class="col-lg-4 col-md-6 col-sm-4 col-xs-4 p-0">
                                 @if($size->weight == $product_size_single->weight )
                      <a href="{{URL::to('singleshop')}}/{{$single_product->id}}?size={{$size->weight}}">
                                    <button class="btn btn-outline-primary qty" type="button" style="color: #161515;">{{$size->weight}}</button></a>
                                @else
                                 <a href="{{URL::to('singleshop')}}/{{$single_product->id}}?size={{$size->weight}}">
                                  <button class="btn btn-outline-primary qty" type="button">{{$size->weight}}</button>
                                 </a>
                                 @endif
                              </div>
                              @endforeach
                           
                              <input  type="text" name="cakemassage" class="message" placeholder="Massage" style="margin-top:10px">
                              <input type="text" class="message"  name="giftmassage"  placeholder="Gift Message">
                           </div>
                           <div class="col-md-6 deliver foo">
                              <h6>Delivery Details</h6>
                              <div class="row">
                                 <div class="col-md-12 p-0">
                                  @php $today = Carbon\Carbon::now()->format('d/m/Y');  
                                     @endphp
                                    <input type="date" name="deliverydate" id="txtDate" min="{{$today}}" class="w-100  pad">
                                 </div>
                              </div>
                              <div class="row" style="margin-top:10px">
                                 <div class="col-md-12 p-0">
                                    <span id="status"></span>
                                    <input type="text" id="pincode" placeholder="Pincode" class="message">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                     </div>
                  </div>
                  <!-- my code -->
                  
                     <input type="hidden" name="product_id" id="product_id" value="{{$product_size_single->product_id}}">
                     <input type="hidden" name="size" value="{{$product_size_single->id}}">
                     <!-- <div class="price-textbox">
                        <button type="button" class="minus-text button" onclick="minus()">
                            <i class="icon-minus"></i>
                        </button>
                        
                        <input type="text" name="quantity" id="qty" value="1" pattern="[0-9]">
                        
                         <button type="button" class="plus-text button" onclick="plus()">
                            <i class="icon-plus"></i>
                        </button>
                        </div> -->
                     <button type="submit" class="filter-btn btn-large" id="submit" form="form1"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Add to Cart</button>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- End Shop Single -->
      <!-- Start Tab Part -->
      <section class="default-section comment-review-tab bg-grey v-pad-remove wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" id="desc">
         <div class="container">
            <div class="tab-part">
               <div class="tab-content">
                  <div class="title text-left">
                     <h3 class="text-coffee">Description About Product</h3>
                  </div>
                  <span id="desc">{!! html_entity_decode($single_product->description) !!}</span>
               </div>
            </div>
         </div>
      </section>

      <section class="default-section comment-review-tab bg-grey v-pad-remove wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" id="cakedescription" style="display: none;">
         <div class="container">
            <div class="tab-part">
               <div class="tab-content">
                  <div class="title text-left">
                     <h3 class="text-coffee">Description About Product</h3>
                  </div>
                  <p id="description"></p>
               </div>
            </div>
         </div>
      </section>
      <!-- End Tab Part -->
      <section class="default-section wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
         <div class="container">
            <div class="title text-center">
               <h3 class="text-coffee">Related Products</h3>
            </div>
            <div class="product-wrapper">
               <div class="owl-carousel owl-theme" data-items="4" data-tablet="3" data-mobile="2" data-nav="false" data-dots="true" data-autoplay="true" data-speed="1800" data-autotime="5000">
                  @foreach( $related_products as $related_product)
                  <div class="item">
                     <div class="product-img">
                        <a href="{{URL::to('singleshop',$related_product->id)}}">
                           <img src="{{Config::get('app.admin_url')}}/img/product/{{$related_product->main_image}}" alt="">
                           <div class="status">
                              <span class="icon-basket fontello"></span>
                           </div>
                        </a>
                     </div>
                     <h5>{{$related_product->title}}</h5>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </section>
   </div>
</main>
@endsection
@section('page-js')
<script>
   $(document).ready(function(){
    $("input[name='caketype']").change(function(){
        var caketype = $("input[name='caketype']:checked").val();
        var product_id = $('#product_id').val();
           // console.log(caketype);
   
          $.ajax({
           url: "{{URL::TO('caketypedescription')}}",
           type: 'post',
           dataType: 'json',
           data: { 
           "_token": "{{ csrf_token() }}",
           product_id  : product_id,
           caketype    : caketype,
            },
            success:function(result)
            {
                 $('#description').empty();
                 $('#description').html(result['description']).text();
                 $('#desc').css('display','none');
                 $('#cakedescription').removeAttr('style');
            }
          });
    });
    
   });
</script>
<script>
   $('#pincode').change(function(){
     var pincode = $('#pincode').val();
      // console.log(pincode);
   
       $.ajax({
         url:"{{URL::to('pincodecheck')}}"+'/'+pincode,
         type:'GET',
          success:function(data){
             console.log(data['status']);
             if (data['status'] == 1) 
             {
               $('#status').text('Your product will be deliver here');
               $('#status').css('color','GREEN');
               $('#status').css('margin-left','22px');
               $('#submit').prop('disabled',false);
             }
             else
             {
               $('#status').text('Product will not be deliver here');
               $('#status').css('color','RED');
               $('#status').css('margin-left','22px');
               $('#submit').prop('disabled', true);
             }
          }
       });
   });
</script>
<!-- <script>
   function minus()
   {
      var qty = $('#qty').val();
      var after_qty = qty - 1;
       if (after_qty == 0) {
          after_qty = 1;
       }
      $('#qty').val(after_qty);
   }
   
   function plus()
   {
      var qty = $('#qty').val();
      var after_qty = parseInt(qty) + 1;
      $('#qty').val(after_qty);
   }
   </script> -->

   <script type="text/javascript">
     $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#txtDate').attr('min', maxDate);
});
   </script>
@endsection