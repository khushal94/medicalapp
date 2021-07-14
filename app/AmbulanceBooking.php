<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmbulanceBooking extends Model
{
    protected $table = 'ambulance_bookings';
    protected $fillable = [
        'user_id', 'description','booking_time','city', 'state', 'area', 'address', 'status'
    ];

}
