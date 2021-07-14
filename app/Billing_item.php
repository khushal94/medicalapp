<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing_item extends Model
{
	protected $table = 'billing_items';
	protected $fillable = [
        'billing_id','invoice_title','invoice_amount'
    ];
}
