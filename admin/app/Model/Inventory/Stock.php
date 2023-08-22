<?php

namespace App\Model\Inventory;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
     protected $fillable = ['product_id', 'size', 'credit', 'debit',];
    protected $table	= 'stocks';
    public    $primaryKey  = 'id';
}
