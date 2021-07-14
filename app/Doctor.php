<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	protected $table = 'doctors';
	protected $fillable = [
        'user_id','name','email','phone', 'birthday', 'gender', 'city', 'state', 'country', 'lat', 'long', 'description', 'patient', 'rating', 'speciality', 'experience'
		,'availability', 'registration', 'qualification', 'image', 'address', 'is_featured', 'is_available', 'is_deleted'
    ];
}
