<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function terms_condition()
    {
      $pages = DB::table('pages')->where('title','terms_condition')->first(); 
    	return view('terms_condition',compact('pages'));
    }

     public function privacypolicy()
    {
      $pages = DB::table('pages')->where('title','privacy_policy')->first();
      return view('privacypolicy',compact('pages'));
    }

     public function refundpolicy()
    {
      $pages = DB::table('pages')->where('title','refundpolicy')->first();
      return view('returnpolicy',compact('pages'));
    }
}
