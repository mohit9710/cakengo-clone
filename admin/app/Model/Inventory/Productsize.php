<?php

namespace App\Model\Inventory;

use Illuminate\Database\Eloquent\Model;

class Productsize extends Model
{
    protected $fillable = ['product_id', 'size', 'weight', 'amount',];
    protected $table	= 'productsizes';
    public    $primaryKey  = 'id';
}
