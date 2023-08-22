@extends('layouts.app')
@section('title')
Home Page
@endsection
@section('content')
<head>
  <style>
    @media(min-width: 1024px){
      .i-full{
        height: 800px;
    object-fit: cover;
      }
      .i-half{
        height: 400px;
    object-fit: cover;
      }
    }
    @media(min-width: 768px){
      .i-full{ height:630px;
    object-fit: cover;}
      .i-half{
         height: 300px;
    object-fit: cover;
      }
    }

  </style>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".dropdown").hover(function(){
              var dropdownMenu = $(this).children(".dropdown-menu");
              if(dropdownMenu.is(":visible")){
                  dropdownMenu.parent().toggleClass("open");
              }
          });
      });     
   </script>
   <script>
      $('.owl-carousel').owlCarousel({
              margin: 10,
              nav: true,
              navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
              responsive: {
                  0: {
                      items: 1
                  },
                  600: {
                      items: 3
                  },
                  1000: {
                      items: 3
                  }
              }
          });
   </script>
</head>
<main>
   <div class="main-part">
      <!-- Slider Part -->
      <section>
         <div class="container-fuild">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
               </ol>
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                <div class="item active">
                   <img src="images/birthday-Desk-20-nov-2020.webp" alt="Los Angeles" style="width:100%;">
                  </div>
                 @foreach( $banners as $banner)
                  <div class="item">
                   <img src="{{Config::get('app.admin_url')}}/img/banner/{{$banner->image}}" alt="{{$banner->title}}" style="width:100%;">
                  </div>
                  @endforeach
               </div>

            </div>
         </div>
      </section>
      <!-- End Slider Part -->
      <!-- services start -->
      <section class="default-section text-white">
         <div class="container-fluid">
            <div class="row">
               <div class="title text-center">
                  <h2 class="text-primary m-0">Categories</h2>
               </div>
               @foreach( $categories as $category )
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center" style="border:1px solid #ffdc8f">
                  <a href="{{URL::to('shop',$category->id)}}">
                     <img src="{{Config::get('app.admin_url')}}/img/category/{{$category->image}}" class="services-img">
                     <p class="service-text">{{$category->category}}</p>
                  </a>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <!-- services ends -->
      <!-- Default Section -->
      <section class="default-section text-white">
         <div class="container-fluid">
            <div class="row">
                 @foreach( $images as $image)
                   @if($image->id == 1)
                     <div class="col-md-7 col-sm-7 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="blog-list dp-animation">
                           <img src="{{Config::get('app.admin_url')}}/img/home/{{$image->images}}" alt="" class="animated w-100 i-full">
                           <div class="blog-over-info">
                              <h3>{{$image->description}} <span class="round-price">{{$image->offer}}%</span> off</h3>
                              
                           </div>
                        </div>
                     </div>
                   @else
                    <div class="col-md-5 col-sm-5 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
                     <div class="blog-list dp-animation">
                       <img src="{{Config::get('app.admin_url')}}/img/home/{{$image->images}}" alt="" class="animated w-100 i-half">
                       <div class="blog-over-info">
                          <h3>{{$image->description}} <span class="round-price">{{$image->offer}}%</span> off</h3>
                       </div>
                    </div>
                    </div>
                   @endif
                  @endforeach

            </div>
         </div>
      </section>
      <section class="default-section">
         <div class="container-fluid" style="padding-top:2rem">
            @foreach( $categories as $category)
            @php $products = DB::table('products')->where('category_id',$category->id)
            ->limit(4)
            ->get(); 
            @endphp 
            <!--  <div class="product-wrapper">
               <div class="owl-carousel owl-theme" data-items="5" data-tablet="3" data-mobile="2" data-nav="true" data-dots="true" data-autoplay="true" data-speed="1800" data-autotime="5000"> -->
            <div class="row">
              @if(count($products) > 0 )
            <div class="title text-center">
               <h2 class="text-primary m-0"> {{$category->category}}</h2>
            </div>
             @else
            @endif
               @foreach( $products as $product )
               <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="item" style="box-shadow: 0px 0px 6px #a7a7a7;padding: 0.5rem;margin-bottom: 16px;">
                     <div class="product-img">
                        <a href="{{URL::to('singleshop',$product->id)}}">
                        <img src="{{Config::get('app.admin_url')}}/img/product/{{$product->main_image}}" class="product-image" alt="">
                        </a>
                     </div>
                    <a href="{{URL::to('singleshop',$product->id)}}"><span class="icon-basket" style="position: absolute;bottom: 25px;right: 25px;"></span></a>
                     <a href="{{URL::to('shop',$product->id)}}">
                        <h6 class=""> {{$product->title}}</h6>
                     </a>
                     <a href="{{URL::to('shop',$product->id)}}"><span><small>₹ {{$product->offer_amount}}</small></span></a>
                  </div>
               </div>
               @endforeach
            </div>
            <!-- </div>
               </div> -->
              @if(count($products) > 0)
               <div class="text-center">
               <a href="{{URL::to('shop',$category->id)}}" type="button" class="btn btn-link">See All</a>
            </div>
              @else
              @endif
             @endforeach
         </div>
      </section>
   </div>
</main>
@endsection