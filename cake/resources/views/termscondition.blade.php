@extends('layouts.app')
@section('title')
Terms-Condition
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
                  <li class="active"><a href="{{URL::to('terms-condition')}}">Terms & Condition</a></li>
               </ul>
               <label class="now">Terms & Condition</label>
            </div>
         </div>
      </section>
      <!-- Start About List -->   
      <section class="default-section about">
         <div class="container">
            <div class="title text-center">
               <h2 class="text-coffee">Terms & Condition</h2>
            </div>
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInDown termlist" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <ul>
                     Product
                     <li>All products as shown on this website are subject to availability (as may be varied from time to time).</li>
                     <li>In the event of any supply difficulties, we reserve the right to substitute with a product of equivalent value and quality without notice.</li>
                     <li>In the event that we are unable to supply all or part of your order (the product or any substitute product to you at all), we shall notify you as soon as possible and reimburse your payment in full not later than 15 days after the intended delivery date.
                     </li>
                  </ul>
                  <br>
                  <ul>
                     Delivery
                     <li>
                        We will not consider ourselves bound by a contract with you in any given situation.
                     </li>
                     <li>
                        Deliveries via courier services cannot be delivered at specific times. All orders will be delivered during the working day between 9am and 9 pm.
                     </li>
                     <li>
                        In case of a delivery not possible on public holidays or local restriction, orders will be delivered on the next working day.
                     </li>
                     <li>
                        To avoid problems or delays with delivery, please ensure that you have included complete address, including accurate postcode of the intended recipient and telephone number, together with your daytime contact number or e-mail address so that we can inform you if any delivery problems are encountered.
                     </li>
                     <li>
                        If, for any reason, you wish to change or cancel your order, you can easily do so by calling +91 9953938606 (8:00 am - 11:00 pm) or send an email to Cakesongoofficial@gmail.com
                     </li>
                     <li>
                        Please give us at least 48 hours notice before the requested delivery date.
                     </li>
                     <li>
                        Orders cannot be canceled or modified within 48 hrs from delivery date.
                     </li>
                     <li>
                        Delivery confirmation for all midnight deliveries will be notified the next day before 10:00 am.
                     </li>
                     <li>
                        Our custom delivery options are as follows:<br>
                        Early Morning Delivery: 7:00 am - 9:00 am ( Rs 100 Charge Extra)<br>
                        Fixed Time Slot Delivery: 10:00 am - 10:00 pm( Free)<br>
                        Standard Delivery: 8:00 am - 9:00 pm (4 time slots are available)<br>
                        Midnight Delivery: 11:00 PM - 12:00 AM ( Rs 250 Charge Extra)
                     </li>
                     <li>
                        We take preference "Preferred Delivery Time" from customer, it is for your convenience and we make our best efforts to deliver your order within "preferred timeline" however this is not guaranteed and may not always be possible.
                     </li>
                     <li>
                        During peak holidays, festivals or events, our customer service agents may not be able to provide immediate delivery confirmation. However, please be assured that our team is working hard to get your orders delivered as soon as possible.
                     </li>
                     <li>
                        If the recipient is not found at home / office, your gift will be delivered to the neighbor, or security. At reception (in case of office), your order will be considered as delivered and we will not be responsible for any damage or loss of items. If recipient's number is incorrect, not responding, or is unavailable, the delivery may not be possible and as such the recipient must collect the order from our delivery center within 24 hrs. from scheduled delivery time.
                     </li>
                     <li>
                        If, for any reason, the delivery is "refused by recipient", the order will be considered as delivery attempted and no refund / change of order is acceptable in this case. We, however, will try our best to convince the recipient for accepting the delivery.
                     </li>
                     <li>
                        All items ordered under "GIFTS" category are shipped using courier company. As such we cannot specify any delivery timings, all orders will be delivered between 9:00 am - 7:00 pm and may take 3-5 days of shipping time depending on the product, availability and other parameters. Please notice "Earliest Date of Delivery" specified on product description page. If you have ordered multiple products and selected a date of delivery earlier than available date, other products such as flowers and cakes will be delivered on selected date and gifts will be shipped at the earliest possibility.
                     </li>
                  </ul>
                  <p>
                     Refund
                     </li>
                  </ul>
                  <ol>A refund can only be requested in case of service failure. Our team will evaluate whether an order qualifies for a refund and decision of the management will be final. Under no circumstances will the refund amount can exceed the amount paid by customer. We are not liable for any loss or claim beyond the amount actually paid by customer.</ol>
                  Our team works very hard to deliver finest quality and service experience to its customers. For us, our customer and business is most important and we really care about delivering the best.
                  In rare case of service failure or quality complaint, you can write an email to cakesongoofficial@gmail.com and our team will respond to you within 8-12 working hours.
                  Our team will process a quick investigation on your order and in case of any quality / service failure found, we assure to re-deliver your product with complimentary flowers within next 24 hrs.
                  While we really understand "Message on Card" and "Message on Cake" is extremely important to be accompanied with flowers and gifts. However, due to large number of complexities, we unfortunately do not guarantee the accuracy and delivery of such messages. It goes without saying that every possible care and attention is taken to ensure we do not miss on these messages. However, we will not take any guarantee about spelling mistakes or missing message on the cakes. What's best here is that we rarely miss your messages. And in cases, usually our support team goes that extra mile to assist and take care of your every order complaint and concerns and makes an extra effort to put things right as and when possible.
                  </p>
               </div>
            </div>
         </div>
      </section>
   </div>
</main>
@endsection