<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TmpOrder extends Model
{
  protected $table = 'tmp_orders';
  protected $fillable = [
      'product_code',
      'product_name',
      'customer_id',
      'price',
      'description',
      'qty',
      'subtotal'
  ];
}
