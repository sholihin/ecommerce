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
}
