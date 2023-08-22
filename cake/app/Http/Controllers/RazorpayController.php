<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\str;
use Razorpay\Api\Api;
use App\Model\Clc\Clcapplication;
use App\Address;
use DB;
use Session;
use Auth;
use random;
use carbon\carbon;
use Mail;
use App\Checkout;

class RazorpayController extends Controller
{
    private $razorpayId = "razorPayId";
    private $razorpayKey = "razorPaySecretKey";

    public function start_payment(Request $request)
    { 
    	 // dd($request->all());
          if ($request->paymentmethod == 'cashondelivery')
           {
            $request->validate([
	        'name'          => 'required',
	        'email'         => 'required',
	        'mobile'        => 'required',
	        'state'         => 'required',
	        'city'          => 'required',
	        'pincode'       => 'required',
	        'address'       => 'required',
	        'order_notes'   => 'nullable',
	        ]);

		      $address = Address::create([
		        'user_id'       => Auth::user()->id,
		        'name'          => $request->name,
		        'email'         => $request->email,
		        'mobile'        => $request->mobile,
		        'state'         => $request->state,
		        'city'          => $request->city,
		        'pincode'       => $request->pincode,
		        'address2'      => $request->address,
		        'order_notes'   => $request->order_notes,
		      ]);
		       // dd($address);

      $charges = DB::table('pincode')->where('pincode',$address->pincode)->first();
        $carts = DB::table('carts')->where('user_id',Auth::user()->id)->get();
         $coupon = DB::table('vouchers')->where('label',$request->coupon)->first();

          /* Total Price */
           $price = 0;
        foreach ($carts as $key)
         {
            $price += $key->price; 
         }
         /* End Total Price */
           
           // Coupon 
           if(!$coupon)
          {
            $finalamount = 0;
          }
        else
        {
          $today = Carbon::now()->format('Y-m-d');
           if( $today >= $coupon->start_date && $today <= $coupon->end_date)
           {
               if ($coupon->offer_type == 'Fixed')
                {
                  $finalamount = $coupon->value; 
                }
                else
                {
                  $finalamount = $price * $coupon->value / 100;
                }
           }
           else
           {
             $finalamount = 0;
           }
          
        }
        /* End Coupon */

         if ($price > 100)
          {
            $charges->delivery_charge = 0;
         }

         if (!$charges) {
           $price = 0;
         }
         else{
           $checkout = Checkout::create([
           'auth_id'          => Auth::user()->id,
           'address'          => $address->id,
           'mobile'           => $address->mobile,
           'pincode'          => $address->pincode,
           'transaction_id'   => $request->paymentmethod,
           'delivery_charges' => $charges->delivery_charge,
           'total_price'      => $price - $finalamount,
           'discount'         => $finalamount,
           ]);

            foreach ($carts as $value) {
              DB::table('checkout_carts')->insert([
              'user_id'         => Auth::user()->id,
              'checkout_id'     => $checkout->id,
              'product_id'      => $value->product_id,
              'size'            => $value->size,
              'qty'             => $value->qty,
              'price'           => $value->price,
              'delivery_date'   => $value->delivery_date,
              'caketype'        => $value->caketype,
              'cakemassage'     => $value->cakemassage,
              'giftmassage'     => $value->giftmassage,
              'created_at'      => Carbon::now(),
              'updated_at'      => Carbon::now(),
              ]);
            }

            DB::table('carts')->where('user_id',Auth::user()->id)->delete();

         }
           
           return back();  
           }
	// Online Payment 
          else
          {
      // dd($request->all());
          	 $request->validate([
	        'name'          => 'required',
	        'email'         => 'required',
	        'mobile'        => 'required',
	        'state'         => 'required',
	        'city'          => 'required',
	        'pincode'       => 'required',
	        'address'       => 'required',
	        'order_notes'   => 'nullable',
	        ]);

		      $address = Address::create([
		        'user_id'       => Auth::user()->id,
		        'name'          => $request->name,
		        'email'         => $request->email,
		        'mobile'        => $request->mobile,
		        'state'         => $request->state,
		        'city'          => $request->city,
		        'pincode'       => $request->pincode,
		        'address2'      => $request->address,
		        'order_notes'   => $request->order_notes,
		      ]);


        // $address = DB::table('address')->where('id',$request->address)->first();
        $product = DB::table('carts')->where('user_id',Auth::user()->id)->get();
        $shipping = DB::table('pincode')->where('pincode',$address->pincode)->first();
           //dd($shipping->max_delivery_charge);
        $total_amount = 0;
            foreach ($product as $key) {
                $total_amount += $key->price;
            }
            

    	$api = new Api($this->razorpayId,$this->razorpayKey);

       // voucher 
      $disc_amount = 0;
       $voucher = DB::table('vouchers')->where('label',$request->coupon)->first();
          
          $current_time = Carbon::now()->format('Y-m-d');

          if ($voucher) {
             if ($current_time >= $voucher->start_date  && $current_time <= $voucher->end_date) {
            
              if ($voucher->offer_type == 'Percentage') 
              {
                $disc_amount = $total_amount * $voucher->value / 100;
              }
              else
              {
                $disc_amount = $voucher->value;
              }
            }
          }

           //Delivery charge with voucher amount
               if ($total_amount > 100) 
               {
                $sub_amt = $total_amount-$disc_amount;
               }
               else
               {
                 $sub_amt = ($total_amount-$disc_amount) + $shipping->delivery_charge;
               }

            		$order = $api->order->create(array(
            		  'amount' 			=> $sub_amt * 100,
            		  'currency' 		=> 'INR'
            		  )
            		);

            		$response = [
            			'orderId' 		=> $order['id'],
            			'razorpayId' 	=> $this->razorpayId,
            			'amount'	    => $order['amount'],
            			'currency'	  => 'INR',
            			'name'			  => $address->name,
            			'mobile'	   	=> $address->mobile,
            			'email'		  	=> $address->email,
            			'address'	  	=> $address->id,
            			'massage'   	=> 'Gift',
                  'disc_amount' => $disc_amount,
                  'pincode'     => $address->pincode,
            		   ];
            		 //dd($response);
            		 $addresses = DB::table('address')->where('user_id',Auth::user()->id)->pluck('id');
                     $carts = DB::table('carts')->where('user_id',Auth::user()->id)
                                                    ->join('products','carts.product_id','products.id')
                                                    ->select('products.title','products.main_image','carts.*')
                                                    ->get();
                        //dd($checkouts);
                    return view('checkout',compact('carts','addresses','response'));
        }
    }

    public function complete(Request $request)
    {
    	$SignatureStatus = $this->SignatureVerify(
    	  	$request->all()['rzp_payment_id'],
    	  	$request->all()['rzp_order_id'],
    	  	$request->all()['rzp_signature']
    	  );

    	if ($SignatureStatus == true) {
            
    	}
    	else{

    		$res = DB::table('payment_collection')->insert([
    			'user_id'	   => Auth::user()->id,
          'receipt_no'   => $this->generate_receipt_no(),
    			'name'         => $request->name,
    			'email'        => $request->email,
    			'address'      => $request->address,
    			'mobile'       => $request->mobile,
    			'amount'       => $request->amount / 100,
    			'payment_id'   => $request->rzp_payment_id,
    			'order_id'     => $request->rzp_order_id,
    			'signature_id' => $request->rzp_signature,
	         'date'   	   => carbon::now(),
	    	   	]);

            $address = DB::table('address')->where('id',$request->address)->first();
               $product = DB::table('carts')->where('user_id',Auth::user()->id)->get();
                 $amount = 0;
                foreach ($product as $key) {
                    $data[] = ['user_id'       => $key->user_id,
                               'product_id'    => $key->product_id,
                               'qty'           => $key->qty,
                               'price'         => $key->price,
                               'size'          => $key->size,
                               'delivery_date' => $key->delivery_date,
                               'caketype'      => $key->caketype,
                               'cakemassage'   => $key->cakemassage,
                               'giftmassage'   => $key->giftmassage,
                            ];
                     $amount +=  $key->price;
                } 

            $delivery_charge = DB::table('pincode')->where('pincode',$request->pincode)->first();

             //Delivery charge
                 if ($amount > 100) 
                  {
                    $charge = 0;
                  }
                 else
                  {
                     $charge = $delivery_charge->delivery_charge;
                  }
               
               $checkout = Checkout::create([
                'auth_id'           => Auth::user()->id,
                'address'           => $request->address,
                'mobile'            => $request->mobile,
                'pincode'           => $request->pincode,
                'transaction_id'    => 'online',
                'delivery_charges'  => $charge,
                'total_price'       => $request->amount / 100,
                'discount'          => $request->disc_amount,
                  ]);

                 foreach ($data as $key) {
                     DB::table('checkout_carts')->insert([   
                    'checkout_id'     => $checkout->id,    
                    'user_id'         => $key['user_id'],
                    'product_id'      => $key['product_id'],
                    'qty'             => $key['qty'],
                    'price'           => $key['price'],
                    'size'            => $key['size'],
                    'delivery_date'   => $key['delivery_date'],
                    'caketype'        => $key['caketype'],
                    'cakemassage'     => $key['cakemassage'],
                    'giftmassage'     => $key['giftmassage'],
                    'created_at'      => Carbon::now(),
                    'updated_at'      => Carbon::now(),
                   ]);
                 }

    		DB::table('carts')->where('user_id',Auth::user()->id)->delete();
    		return response()->json(['status' => 1, ]);
    	}

    }

    private function SignatureVerify($_signature,$_payment_id,$_order_id)
    {
    	try
    	{
    		$api = new Api($this->razorpayId,$this->razorpayKey);
    		 $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_payment_id’ ,  'razorpay_order_id' => $_order_id’);
			 $order  = $api->utility->verifyPaymentSignature($attributes);
			 return true;
    	}
    	catch(\Exception $e)
    	{
    		return false;
    	}
    }

    public function generate_receipt_no()
    {
        // generate receipt no 
        $receipt_last = DB::table('payment_collection')->orderby('id', 'desc')->first();
        if($receipt_last){
            $receipt_no = $receipt_last->id+1;
        }
        else{
            $receipt_no = 1;
        }

        $receipt_no = 'cakesongo_'.'000'.$receipt_no;
        return $receipt_no;
    }
}
