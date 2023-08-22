<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Model\Inventory\Productsize;
use App\Model\Inventory\Product;
use DB;
use Carbon\Carbon;


class WebsiteController extends Controller
{
    /*Index Page*/

    public function index(){

    	$slider   = DB::table('banners')->Where('type','Slider')->get();
    	$category = DB::table('categories')->Where('type','Category')->get(); 
        $product  = DB::table('products')->limit('9')->orderby('id','DESC')->get();
        $vguard   = DB::table('products')->where('category_id',3)->limit('9')->orderby('id','DESC')->get();

        $datas = [];
        foreach ($product as $key) {
            $datas[] = array(
                    'url'        => $key->id,
                    'title'      => $key->title, 
                    'main_image' => $key->main_image,
                    'price'      => $this->asset($key->id)
                );
        }

        $vguards = [];
        foreach ($vguard as $key) {
            $vguards[] = array(
                    'url'        => $key->id,
                    'title'      => $key->title, 
                    'main_image' => $key->main_image,
                    'price'      => $this->asset($key->id)
                );
        }

    	return view('website.index',compact('slider','category','datas','vguards'));
    }


     public function store(request $request){

        $query = Product::query();

        if ($request->category) {
            $query->where('category_id',$request->category);
        }

        /*SubSUbcategory*/
        if ($request->sub_sub_category) {
            $query->where('sub_sub_category_id',$request->sub_sub_category);
        }

        /*Search*/
        if ($request->search) {
              $query->where('title', 'like', '%' .$request->search. '%');
        }

        $product = $query->where('status',1)
                         ->orderby('id','DESC')
                         ->paginate(16);

        $datas = [];
        foreach ($product as $key) {
            $datas[] = array(
                    'url'        => $key->id,
                    'description'=> $key->description,
                    'title'      => $key->title, 
                    'main_image' => $key->main_image,
                    'price'      => $this->asset($key->id)
                );
        }

        $paginate = $product->links();
        $category = DB::table('categories')->get();
        $vguard   = DB::table('products')->where('category_id',3)
                                         ->limit('5')
                                        ->orderby('id','DESC')
                                        ->get();
        $vguards = [];
        foreach ($vguard as $key) {
            $vguards[] = array(
                    'url'        => $key->id,
                    'title'      => $key->title, 
                    'main_image' => $key->main_image,
                    'price'      => $this->asset($key->id)
                );
        }
        return view('website.store',compact('datas','paginate','category','vguards'));
    }

    /*Contact Us Page*/

    public function contact(){

    	return view('website.contact');
    }

    /*assets*/
    public function asset($id){

        $Productsize = DB::table('productsizes')->Where('product_id',$id)->first();

        if ($Productsize) {
            return $Productsize->amount;
        }
        else
        {
            return 0;
        }
        
    }

    /*ABout Us*/
    public function aboutus(){

        return view('website.aboutus');

    }

    /*Training*/
    public function training(){
        return view('website.training');
    }
    /*supprort*/

    public function support(){
        return view('website.support');
    }

    public function trainin_app_store(request $request){
        $insert = DB::table('training')->insert([
                                                'name'    => $request->name,
                                                'email'   => $request->email,
                                                'mobile'  => $request->mobile,
                                                'address' => $request->address,
                                                'date'    => Carbon::now(),
                                                ]);
        return back();
    }

    public function support_query_store(request $request){
        
         $insert = DB::table('support')->insert([
                                                'name'    => $request->name,
                                                'email'   => $request->email,
                                                'mobile'  => $request->mobile,
                                                'subject' => $request->subject,
                                                'message' => $request->message,
                                                'date'    => Carbon::now(),
                                                ]);
        return back();
    }

    public function contact_us_store(request $request){
    
     $insert = DB::table('contact_us')->insert([
                                            'first'    => $request->first,
                                            'last'     => $request->last,
                                            'subject'  => $request->subject,
                                            'message'  => $request->message,
                                            'date'     => Carbon::now(),
                                            ]);
    return back();
    }

    
}
