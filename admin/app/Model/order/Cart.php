<?php

namespace App\Model\order;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [ 'product_id', 'color', 'size', 'user_id', 'qty', 'price',];
    protected $table	= 'carts';
    public    $primaryKey  = 'id';
}
