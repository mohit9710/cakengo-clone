<?php

namespace App\Model\Pincode;

use Illuminate\Database\Eloquent\Model;

class Pincode extends Model
{
    protected $fillable = ['pincode','delivery_time','max_delivery_charge','delivery_charge','created_at', 'updated_at'];
    protected $table	= 'pincode';
    public    $primaryKey  = 'id';
}
