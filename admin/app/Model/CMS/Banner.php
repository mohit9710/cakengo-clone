<?php

namespace App\Model\CMS;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['title','type','short_description', 'image', 'status','created_at', 'updated_at'];
    protected $table = 'banners';
    public $primaryKey = 'id';
}
