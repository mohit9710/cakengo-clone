<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = 
    ['auth_id','address','mobile','pincode','transaction_id','delivery_charges','total_price','discount'];

    protected $table = 'checkout';

    public $primaryKey = 'id';
}
