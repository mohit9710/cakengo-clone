<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index($id){

    	$data   = DB::table('products')->where('id',$id)->first();
        $amount = $this->asset($data->id);
        $image  = DB::table('product_file')->where('product_id',$data->id)->get();
        $Productsize = DB::table('productsizes')->Where('product_id',$id)->get();
        $vguard   = DB::table('products')->where('category_id',3)->limit('9')->orderby('id','DESC')->get();
        $color   = DB::table('product_attribute')->where('product_id',$data->id)
                                                 ->where('atribute','Color')
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

    	return view('website.product',compact('data','amount','image','Productsize','vguards','color'));

    }	

   	/*Default Price*/
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
}
