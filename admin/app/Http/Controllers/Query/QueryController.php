<?php

namespace App\Http\Controllers\Query;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class QueryController extends Controller
{
   
   public function view_support(){
   	$data = DB::table('support')->get();
   	return view('Admin.Query.support', compact('data'));
   }

   public function view_training(){
   	$data = DB::table('training')->get();
   	return view('Admin.Query.training', compact('data'));
   }
   
    public function view_contact(){
   	$data = DB::table('contact_us')->get();
   	return view('Admin.Query.contactus', compact('data'));
   }
}
