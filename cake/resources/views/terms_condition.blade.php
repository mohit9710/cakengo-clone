@extends('layouts.app')
@section('title')
Terms and Conditions
@endsection

@section('page-css')
 <style>
   .termlist ul li{
    list-style-type: disc;
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
                    <li class="active"><a href="{{URL::to('terms_condition')}}">Terms & Condition</a></li>
                </ul>
                <label class="now">Terms & Condition</label>
            </div>
        </div>
    </section>


      <section class="default-section about">
         <div class="container">
            <div class="title text-center">
               <h2 class="text-coffee">Terms and Conditions</h2>
            </div>
            <div class="row termlist">
              {!! html_entity_decode($pages->description) !!}
            </div>
         </div>
      </section>
   </div>
</main>
@endsection