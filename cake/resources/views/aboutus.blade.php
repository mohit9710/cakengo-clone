 @extends('layouts.app')

 @section('title')
  About Us
   @endsection

    @section('content')
      <main>
            <div class="main-part">

                <section class="breadcrumb-nav">
                    <div class="container">
                        <div class="breadcrumb-nav-inner">
                            <ul>
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active"><a href="{{URL::to('about-us')}}">About</a></li>
                            </ul>
                            <label class="now">ABOUT</label>
                        </div>
                    </div>
                </section>

                <!-- Start About List -->   

                <section class="default-section about">
         <div class="container">
            <div class="title text-center">
               <h2 class="text-coffee">About Us</h2>
            </div>
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInDown termlist" data-wow-duration="1000ms" data-wow-delay="300ms">
                {!! html_entity_decode($pages->description) !!}
               </div>
            </div>
         </div>
      </section>

                <!-- End Partner Blog -->

            </div>
        </main>  
      @endsection