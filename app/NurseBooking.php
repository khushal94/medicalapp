<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NurseBooking extends Model
{
    protected $table = 'nursebooking';
    protected $fillable = [
        'visit_date','visit_time', 'address', 'status'
    ];
}
