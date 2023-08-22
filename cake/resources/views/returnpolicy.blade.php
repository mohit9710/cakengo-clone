 @extends('layouts.app')

 @section('title')
  Refund and Return Policy
   @endsection

    @section('content')
      <main>
            <div class="main-part">

                <section class="breadcrumb-nav">
                    <div class="container">
                        <div class="breadcrumb-nav-inner">
                            <ul>
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active"><a href="{{URL::to('refund-policy')}}">Refund & Return Policy</a></li>
                            </ul>
                            <label class="now">Refund & Return Policy</label>
                        </div>
                    </div>
                </section>

                <!-- Start  Refund-Return Policy List -->   

                <section class="default-section about">
         <div class="container">
            <div class="title text-center">
               <h2 class="text-coffee">Return Policy</h2>
            </div>
            <div class="row termlist">
              {!!html_entity_decode($pages->description)!!}            
            </div>
         </div>
      </section>

                <!-- End Refund-Return Policy List -->

            </div>
        </main>  
      @endsection