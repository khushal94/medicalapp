<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NurseBooking extends Model
{
    protected $table = 'nursebooking';
    protected $fillable = [
        'nurse_id','patient_id','visit_date','visit_time', 'address', 'status'
    ];
}
