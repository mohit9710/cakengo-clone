  @extends('layouts.app')

   @section('page-css')
    @endsection

      @section('content')

      
        <main>
            <div class="main-part">

                <section class="breadcrumb-nav">
                    <div class="container">
                        <div class="breadcrumb-nav-inner">
                            <ul>
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active"><a href="{{URL::to('contact-us')}}">Contact</a></li>
                            </ul>
                            <label class="now">Contact</label>
                        </div>
                    </div>
                </section>
                
                <!-- Start Contact Part -->

                <section class="default-section contact-part pad-top-remove">
                    <div class="map-outer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14010.760042907925!2d77.22415013204717!3d28.609075006755962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2db961be393%3A0xf6c7ef5ee6dd10ae!2sIndia%20Gate%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1603522571009!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="container">
                        <div class="title text-center">
                            <h2 class="text-coffee">Contact Us</h2>
                            <h6>We are a second-generation family business established in 1972</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="contact-blog-row">
                                    <div class="contact-icon">
                                        <img src="images\location.png" alt="">
                                    </div>
                                    <p>{{$pages->address}}</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
                                <div class="contact-blog-row">
                                    <div class="contact-icon">
                                        <img src="images\cell.png" alt="">
                                    </div>
                                    <p><a href="tel:1234567890">{{$pages->mobile}}</a></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1100ms">
                                <div class="contact-blog-row">
                                    <div class="contact-icon">
                                        <img src="images\mail.png" alt="">
                                    </div>
                                    <p><a href="mailto:support@despina.com">{{$pages->email}}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <h5 class="text-coffee">Leave us a Message</h5>
                                <p></p>
                                <form class="form" method="post" name="contact-form">
                                    <div class="row">
                                        <div class="alert-container"></div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>First Name *</label>
                                            <input name="first_name" type="text" required="">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Last Name *</label>
                                            <input name="last_name" type="text" required="">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Email *</label>
                                            <input name="email" type="email" required="">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Subject *</label>
                                            <input name="subject" type="text" required="">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Your Message *</label>
                                            <textarea name="message" required=""></textarea>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input name="submit" value="SEND MESSAGE" class="submit-btn send_message" type="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <h5 class="text-coffee">Opening Hours</h5>
                                <ul class="time-list">
                                    <li><span class="week-name">Monday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Tuesday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Wednesday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Thursday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Friday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Saturday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- End Contact Part -->

            </div>
        </main>  

                
      @endsection

   @section('page-js')
    @endsection