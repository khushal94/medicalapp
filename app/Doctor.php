<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	protected $table = 'doctors';
	protected $fillable = [
        'name','email','phone', 'birthday', 'gender', 'city', 'state', 'country', 'lat', 'long', 'description', 'patient', 'rating', 'speciality', 'experience'
		,'availability', 'registration', 'qualification', 'image', 'address'
    ];
}
