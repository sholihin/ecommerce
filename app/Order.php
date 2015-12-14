<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 't_orders';
    protected $fillable = [
    	'invoice',
    	'subtotal'
	];
}
