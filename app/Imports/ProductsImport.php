<?php

namespace App\Imports;

use App\Models\Product;
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
            'product_name' => $row['product_name'],
            'part_no' => $row['part_no'],
            'board_no' => $row['board_no'],
            'compatible_model' => $row['compatible_model'],
            'product_selling_price' => $row['product_selling_price'],
            'product_cost_price'=> $row['product_cost_price'],
            'product_qty_avail' =>$row['product_qty_avail'], 
            'product_image1' =>$row['product_image1'], 
            'currency_unit' =>$row['currency_unit'], 
            'amazon_link' =>$row['amazon_link'], 
            'facebook_link' =>$row['facebook_link'], 
            'kijiji_link' =>$row['kijiji_link'],
            'product_desc' =>$row['product_desc']
            //'timestamps' =>$row['timestamps']
        ]);
    }
}
