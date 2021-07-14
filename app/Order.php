<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
	protected $fillable = [
        'user_id','medicines','type', 'payment_id', 'status', 'Is_paid'
    ];
}
