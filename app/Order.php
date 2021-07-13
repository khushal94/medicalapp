<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
	protected $fillable = [
        'medicines','type', 'payment_id', 'status'
    ];
}
