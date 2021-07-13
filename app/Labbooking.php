<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labbooking extends Model
{
    protected $table = 'labbooking';
    protected $fillable = [
        'payment_id','test_data','status'
    ];
}
