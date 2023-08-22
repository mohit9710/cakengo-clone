<?php

namespace App\Model\Category;

use Illuminate\Database\Eloquent\Model;

class Sub_Sub_Category extends Model
{
    protected $fillable = ['category_id', 'sub_category_id', 'sub_sub_category', 'description', 'image', 'created_at', 'updated_at',];
    protected $table    = 'sub__sub__categories';
    public $primaryKey  = 'id';
}
