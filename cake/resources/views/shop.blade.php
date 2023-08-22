@extends('layouts.app')
@section('title')
Shop
@endsection
  @section('page-css')
    <style>
       .prod-t{
            margin: 0;
            font-size: 15px;
            font-family: "Graviola-Regular";
            padding-top: 1rem;
            min-height: 43px;
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
                  <li class="active"><a href="#">Shop</a></li>
               </ul>
               <label class="now">SHOP</label>
            </div>
         </div>
      </section>
      <!-- Start Blog List -->   
      <section class="default-section shop-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="blog-left-section">
                     <div class="blog-left-search blog-common-wide wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <form action="{{URL::to('shop')}}" method="get">
                           <input type="text" name="search" placeholder="Search">
                           <input type="submit" name="submit" value="&#xf002;">
                        </form>
                     </div>
                     <div class="blog-left-categories blog-common-wide wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        @php $categories = DB::table('categories')->get(); @endphp
                         @foreach( $categories as $category)
                           @php $subcategories = DB::table('sub__categories')->where('category_id',$category->id)->get()
                             @endphp
                             @if( count($subcategories) > 0)
                               <a href="{{URL::to('shop',$category->id)}}"><h5>{{$category->category}}</h5></a>
                            
                              @foreach( $subcategories as $subcategory)
                               <li><a href="{{URL::to('shop/'.$category->id.'/'.$subcategory->id)}}">{{$subcategory->sub_category}}</a>
                              @endforeach
                               </li><br>
                               @endif
                         @endforeach
                     </div>
                     <div class="blog-left-filter blog-common-wide wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h5>Filter</h5>
                        <p>Price: ₹0 — ₹100</p>
                        <form action="{{URL::to('shop')}}" method="get">
                           <!-- @csrf -->
                           <input id="ex2" type="text" name="filter" class="span2" value="" data-slider-min="0" data-slider-max="1000" data-slider-step="10" data-slider-value="[0,100]">
                           <button type="submit" class="filter-btn">FILTER</button>
                        </form>
                     </div>
                  </div>
               </div>

               <div class="col-md-9 col-sm-12">
                  <div class="blog-right-section">
                     <div class="row">
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
                                 <h6 class="prod-t"> {{$product->title}}</h6>
                              </a>
                              <a href="{{URL::to('shop',$product->id)}}"><span><small>₹ {{$product->offer_amount}}</small></span></a>
                           </div>
                        </div>
                        @endforeach  
                     </div>
                        {{ $products->links() }}
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- End Blog List -->
   </div>
</main>
@endsection