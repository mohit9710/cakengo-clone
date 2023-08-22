<?php

namespace App\Model\Vouchers;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
        protected $fillable = ['label', 'title', 'description', 'start_date', 'end_date', 'offer_type', 'value', 'status',];
	    protected $table    = 'vouchers';
	  	public $primaryKey  = 'id';
}
