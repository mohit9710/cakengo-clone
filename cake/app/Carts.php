<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $fillable = ['product_id','color','size','user_id','qty','price'];

    protected $table = 'carts';

    public $primaryKey = 'id';
}
