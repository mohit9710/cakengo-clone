<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Address;
use App\Checkout;
use DB;
use Auth;
use App\Carts;

class WebsiteController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        $banners    = DB::table('banners')->where('status',1)->get();
        $cakes      = DB::table('products')->where('products.category_id',3)->get();
        $flowers    = DB::table('products')->where('products.category_id',4)->get();
        $images     = DB::table('home')->get();

    	return view('welcome',compact('categories','cakes','flowers','banners','images'));
    }

    public function aboutus()
    {
       $pages = DB::table('pages')->where('title','about_us')->first();
    	return view('aboutus',compact('pages'));
    }

    public function contactus()
    {
      $pages = DB::table('pages')->where('title','contact_us')->first();
       // dd($pages);
    	return view('contactus',compact('pages'));
    }

    public function singleshop(request $request, $id)
    {
       // dd($id);
       
       $single_product = DB::table('products')->where('products.id',$id)
                                              ->join('categories','products.category_id','categories.id')
                                              ->select('products.*','categories.category')
                                              ->first();
           // dd($single_product);
        $sizes = DB::table('productsizes')->where('product_id',$id)->get();
        $files = DB::table('product_file')->where('product_id',$id)->get();
       

          $data = [];
          foreach ($sizes as $key) {
              $data[] = $key->amount;
          }
         if (!$data) {
             return back();
         }
         
        if ($request->size) {
            $product_size_single = DB::table('productsizes')->where('product_id',$id)
                                                            ->where('weight',$request->size)
                                                            ->first();
        }
        else
        {
            $product_size_single = DB::table('productsizes')->where('product_id',$id)
                                                        ->first();
        }

         $related_products = DB::table('products')->where('category_id',$single_product->category_id)
                                                  ->join('productsizes','products.id','productsizes.product_id')
                                                  ->select('products.*','productsizes.weight as weight')
                                                  ->get();
        
          // dd($related_product);
        return view('singleshop',compact('single_product','sizes','files','product_size_single','related_products'));
    }

    public function addtocart(request $request)
    {
       // dd($request->all());

        $request->validate([
        'product_id'   => 'required',
        'deliverydate' => 'required',
        'size'         => 'required',
        'caketype'     => 'nullable',
         ]);

       $product = DB::table('productsizes')->where('id',$request->size)->first();
        // dd($product);

        if ($request->caketype == '') {
           $caketype = '';
        }
        else{
          $caketype = $request->caketype;
        }

       if (Auth::check())
        {
          DB::table('carts')->insert([
          'user_id'       => Auth::user()->id,
          'product_id'    => $request->product_id,
          'size'          => $request->size,
          'qty'           => $request->quantity,
          'price'         => $product->amount,
          'delivery_date' => $request->deliverydate,
          'caketype'      => $caketype,
          'cakemassage'   => $request->cakemassage,
          'giftmassage'   => $request->giftmassage,
          'created_at'    => Carbon::now(),
          'updated_at'    => Carbon::now(),
          ]);
        }
        else
         {
            return redirect()->route('login');
         }
       return back();
    }

    public function cartdel($id)
    {
      $del = DB::table('carts')->where('id',$id)->delete();
      return back();
    }

    public function shopcart()
    {
      if (Auth::check())
       {
        $carts = DB::table('carts')->where('user_id',Auth::user()->id)
                                   ->join('products','carts.product_id','products.id')
                                   ->join('productsizes','carts.size','productsizes.id')
                                   ->select('carts.*','products.title','productsizes.weight')
                                   ->get();
                              // dd($carts);
        return view('shopcart',compact('carts'));
       }
      else
      {
        return redirect()->route('login');
      }
    }

    public function checkout()
    {
        if (Auth::check())
         {
           $carts = DB::table('carts')->where('user_id',Auth::user()->id)
                                   ->join('products','carts.product_id','products.id')
                                   ->join('productsizes','carts.product_id','productsizes.id')
                                   ->select('carts.*','products.title','productsizes.weight')
                                   ->get();
              // dd($carts);
          return view('checkout',compact('carts'));
         }
         else
         {
           return redirect()->route('login');
         }
    }

    public function pincode($pin)
    {
      $pins = DB::table('pincode')->where('pincode',$pin)->first();
      $carts = DB::table('carts')->where('user_id',Auth::user()->id)->get();

       $price = 0;
        foreach ($carts as $key)
         {
            $price += $key->price; 
         }

       if (!$pins)
        {
           $total = $price;
          return response()->json([
            'massage' => 'Wrong Pincode',
            'status'  => 404,
            'total'   => $total,
              ],404);
        }
        else
        {
           if ($price > 100)
            {
              return response()->json([
              'delivery_charge' => 0,
              'total'           => $price,
          ]);
           }
           else
           {
             $total = $price + $pins->delivery_charge;
               return response()->json([
               'delivery_charge' => $pins->delivery_charge,
               'total'           => $total,
          ]);
           }

        }
    }

    public function quantity(request $request)
    {
       Carts::where('id',$request->id)->update(['qty'  => $request->qty]);
    }

    public function coupon(request $request)
    {
       $coupon = DB::table('vouchers')->where('label',$request->coupon)->first();


        if(!$coupon)
          {
            return response()->json(['data' => 0]);
          }
        else
        {
          $today = Carbon::now()->format('Y-m-d');
           if( $today >= $coupon->start_date && $today <= $coupon->end_date)
           {
            return response()->json([ 
              'coupon_type'  => $coupon->offer_type,
              'value'        => $coupon->value,
          ]);
           }
           else
           {
            return response()->json(['data'  => 'Your Coupon is not valid']);
           }
          
        }
        
    }

    public function trackorder()
    {
      if (!Auth::check())
       {
         return redirect()->route('login');
      }
        $orders = DB::table('checkout')->where('auth_id',Auth::user()->id)->get();
        return view('trackorder',compact('orders'));

    }

    public function invoice($id)
    {
      $products = DB::table('checkout_carts')->where('checkout_id',$id)
                                             ->join('products','checkout_carts.product_id','products.id')
                                             ->join('productsizes','checkout_carts.size','productsizes.id')
                                             ->select('checkout_carts.*','products.title','productsizes.weight')
                                             ->get();
      $order = DB::table('checkout')->where('id',$id)->first();
      $address = DB::table('address')->where('id',$order->address)->first();
      return view('invoice',compact('products','order','address'));
    }

    public function shop($category_id=null,$subcategory_id=null,request $request)
    {
        $filter = "";
        if ($category_id != null || $subcategory_id != null) {
             $products  = DB::table('products')->where('status',1)
                                               ->where('category_id',$category_id)
                                               ->where('sub_category_id',$subcategory_id)
                                               ->select('products.*')
                                               ->paginate(16);
        }elseif ($category_id) {
             $products  = DB::table('products')->where('status',1)
                                               ->where('category_id',$category_id)
                                               ->select('products.*')
                                               ->paginate(16);
        }elseif ($request->search){
          $products  = DB::table('products')->Leftjoin('wishlists','products.id','wishlists.product_id')
                                            ->select('products.*','wishlists.status as wish_status')
                                            ->where('title', 'like', '%' .$request->search. '%')
                                            ->paginate(16);
        }
        elseif ($request->filter){
           $filter = explode(",",$request->filter);

           $products = DB::table('products')->whereBetween('offer_amount',$filter)
                                           ->paginate(16);
                                          
         }
        else{
          $products  = DB::table('products')->paginate(16);

        }        
         // dd($products);
        return view('shop',compact('products','filter'));
       
    }

    public function verify($pincode)
    {
       $pins = DB::table('pincode')->where('pincode',$pincode)->first();
        if ($pins)
         {
           return response()->json(['status' => 1]);
        }
        else
        {
          return response()->json(['status' => 0]);
        }
    }

    public function caketype(request $request)
    {
       $caketype = DB::table('products')->where('id',$request->product_id)->first();
        
        if ($request->caketype == 'egg')
         {
           return response()->json(['description' => $caketype->description]);
         }
        else
        {
           return response()->json(['description' => $caketype->eggless_description]);
        }
        
    }

}
