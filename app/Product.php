<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'm_products';
    protected $fillable = [
        'product_code',
        'product_name',
        'purchase_price',
        'selling_price',
        'description',
        'filename',
        'stock'
    ];

    // public function getCode()
    // {
    //     $productCode = Product::table('products')->orderBy('product_code', 'desc')->limit(1)->first();
    //     return $productCode;
    // }
}
