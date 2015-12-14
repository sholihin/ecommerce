<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    protected $table = 'detail_orders';
    protected $fillable = [
      'invoice_code',
      'product_code',
      'product_name',
      'customer_id',
      'price',
      'qty',
      'subtotal'
    ];
}
