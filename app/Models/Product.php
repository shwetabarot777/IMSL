<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
    'product_name', 'part_no', 'board_no','compatible_model','product_selling_price',
    'product_cost_price', 'product_qty_avail', 'product_image1', 'currency_unit', 'amazon_link', 'facebook_link', 'kijiji_link' ,'product_desc', 'timestamps','category'

    ];


    public function category(){
          return $this->belongsTo('App\Models\Category');
    }


     
}
