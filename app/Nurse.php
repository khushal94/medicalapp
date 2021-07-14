<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
	protected $table = 'nurses';
	protected $fillable = [
        'user_id','name','email','phone', 'birthday', 'gender', 'city', 'state', 'country', 'lat', 'long', 'description', 'patient', 'rating',
		'availability', 'qualification', 'image', 'address','is_deleted'
    ];
}
