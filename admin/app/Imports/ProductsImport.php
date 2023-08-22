<?php

namespace App\Imports;

use App\Model\Inventory\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'category_id'        => $row['category_id'],
            'sub_category_id'    => $row['sub_category_id'],
            'meta_title'         => $row['meta_title'],
            'meta_keyword'       => $row['meta_keyword'],
            'title'              => $row['title'],
            'description'        => $row['description'],
            'offer_amount'       => $row['offer_amount'],
            'main_image'         => $row['main_image'],
            'status'             => $row['status'],
        ]);
    }
}
