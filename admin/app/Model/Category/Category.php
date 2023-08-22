<?php

namespace App\Model\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category', 'type', 'description', 'image', 'created_at', 'updated_at'];
    protected $table	= 'categories';
    public    $primaryKey  = 'id';
}
