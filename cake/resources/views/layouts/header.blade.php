<div id="navbar" style="position: fixed;
   width: -webkit-fill-available;z-index: 99999;background:#fff">
      <div class="row">
         <div class="col-md-6 col-xs-6 col-6 text-left">
            <img src="{{URL::to('images/logo.webp')}}" alt="">
         </div>
        <!--  <div class="col-md-4 col-xs-4 col-4">
           <form action="{{URL::to('shop')}}">
              <div class="input-group">
                 <input class="form-control" name="search" placeholder="Search Product..." required="" type="text" onchange="this.form.submit()">
              </div>
           </form>
         </div> -->
         <div class="col-md-6 col-xs-6 col-6">
            <div>

               @if(Auth::check())
                <div class="cart animated">
               @php $count = DB::table('carts')->where('user_id',Auth::user()->id)->count();
                    $carts = DB::table('carts')->where('user_id',Auth::user()->id)->get();
                    $subtotal = 0;
                @endphp
                @foreach( $carts as $cart)
                  @php $subtotal += $cart->price; @endphp
                 @endforeach
            <span class="icon-basket fontello"></span><span>{{$count}} items - ₹ {{$subtotal}}</span>
            <div class="cart-wrap">
               <div class="cart-blog">
                @php $carts = DB::table('carts')->where('user_id',Auth::user()->id)
                                                ->join('products','carts.product_id','products.id')
                                                ->join('productsizes','carts.size','productsizes.id')
                                                ->select('carts.*','products.title','products.main_image','productsizes.amount')
                                                ->get(); 
                      $subtotals = 0;
                          
                @endphp

                   @foreach( $carts as $cart )
                    <div class="cart-item">
                       <div class="cart-item-left">
                          <img src="{{Config::get('app.admin_url')}}/img/product/{{$cart->main_image}}" alt="">
                       </div>
                       <div class="cart-item-right">
                          <h6>{{$cart->title}}</h6>
                          <span>₹ {{$cart->amount}}</span>
                       </div>
                       <a href="{{URL::to('cartdel',$cart->id)}}"><span class="delete-icon"></span></a>
                    </div>
                    @php $subtotals += $cart->amount; @endphp
                    @endforeach

                  <div class="subtotal">
                     <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                           <h6>Subtotal :</h6>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                           <span>₹ {{$subtotals}}</span>
                        </div>
                     </div>
                  </div>
                  <div class="cart-btn">
                     <a href="{{URL::to('shopcart')}}" class="button-default view">VIEW ALL</a>
                     <a href="{{URL::to('checkout')}}" class="button-default checkout">CHECK OUT</a>
                  </div>
               </div>
            </div>
         </div>
                @else
            <div class="cart animated">
            <span class="icon-basket fontello"></span><span>0 items - ₹ 0</span>
            <div class="cart-wrap">
               <div class="cart-blog">
                  
                  <div class="cart-btn">
                     <a href="{{route('login')}}" class="button-default view">VIEW ALL</a>
                     <a href="{{route('login')}}" class="button-default checkout">CHECK OUT</a>
                  </div>
               </div>
            </div>
         </div>
         @endif
            </div>
         </div>
      </div>
   <div style="background: #1d1414;height: 51px;">
         <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <!-- <a class="navbar-brand" href="#">Brand</a> -->
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li><a href="{{URL::to('/')}}">Home</a></li>
                  <li class="dropdown">
                     <a href="{{URL::to('shop')}}" class="dropdown-toggle">Shop </a>
                    <!--  <ul class="dropdown-menu">
                        @php $categories = DB::table('categories')->get(); @endphp
                        @foreach( $categories as $category )
                        <li class="dropdown dropdown-submenu">
                           <a href="{{URL::to('shop',$category->id)}}" >{{$category->category}}</a>
                           <ul class="dropdown-menu">
                              @php $subcategories = DB::table('sub__categories')->where('category_id',$category->id)->get(); @endphp
                              @foreach( $subcategories as $subcategory )
                              <li><a href="{{URL::to('shop/'.$category->id.'/'.$subcategory->id)}}">{{$subcategory->sub_category}}</a></li>
                              @endforeach
                           </ul>
                        </li>
                        @endforeach;
                     </ul> -->
                  </li>
                  <li><a href="{{URL::to('/about-us')}}">About Us</a></li>
                  <li><a href="{{URL::to('/contact-us')}}">Contact Us</a></li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </nav>
      </div>
</div>