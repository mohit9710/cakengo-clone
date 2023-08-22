<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','WebsiteController@index');
Route::get('about-us','WebsiteController@aboutus');
Route::get('contact-us','WebsiteController@contactus');
Route::get('singleshop/{id}','WebsiteController@singleshop');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('addtocart','WebsiteController@addtocart');
Route::get('cartdel/{id}','WebsiteController@cartdel');
Route::get('shopcart','WebsiteController@shopcart');
Route::get('checkout','WebsiteController@checkout');
Route::post('checkoutsave','RazorpayController@start_payment');
Route::get('pincode/{pin}','WebsiteController@pincode');
Route::post('payment','RazorpayController@complete');

  // Update Quantity
Route::post('quantity','WebsiteController@quantity');
  // Coupon 
Route::post('coupon','WebsiteController@coupon');
  // Track Order
Route::get('trackorder','WebsiteController@trackorder');
Route::get('details/{id}','WebsiteController@orderdetails');
Route::get('invoice/{id}','WebsiteController@invoice');
  // Product Details { shop }
Route::get('shop/{category_id?}/{subcategory_id?}','WebsiteController@shop');
// Route::post('filter','WebsiteController@filter');

Route::get('pincodecheck/{pincode}','WebsiteController@verify');
Route::post('caketypedescription','WebsiteController@caketype');

/*Pages*/
Route::get('terms_condition','PagesController@terms_condition');
Route::get('privacy-policy','PagesController@privacypolicy');
Route::get('refund-policy','PagesController@refundpolicy');