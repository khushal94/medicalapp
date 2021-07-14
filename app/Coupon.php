<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
	protected $table = 'coupons';
	protected $fillable = [
        'name','code','category', 'discount_amount', 'discount_type', 'minimum_amount', 'startingdate', 'endingdate', 'image', 'is_deleted'
    ];
}
