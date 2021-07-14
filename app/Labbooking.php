<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labbooking extends Model
{
    protected $table = 'labbooking';
    protected $fillable = [
        'user_id','payment_id','is_paid','test_data','package_id','package_selected','status'
    ];
}
