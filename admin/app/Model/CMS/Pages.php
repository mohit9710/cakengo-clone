<?php

namespace App\Model\CMS;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    protected $fillable = ['title','meta_title','keyword', 'description', 'image', 'status','created_at', 'updated_at'];
    protected $table = 'pages';
    public $primaryKey = 'id';
}
