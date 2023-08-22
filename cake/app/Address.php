<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id','name','email','address2','pincode','state','city','mobile','order_notes'];

    protected $table = 'address';

    public $primaryKey = 'id';
}
