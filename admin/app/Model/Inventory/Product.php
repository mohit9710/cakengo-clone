<?php

namespace App\Model\Inventory;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'sub_category_id', 'sub_sub_category_id','meta_title','meta_keyword','title','status', 'description', 'main_image','offer_amount'];

    protected $table	= 'products';
    
    public    $primaryKey  = 'id';
}
