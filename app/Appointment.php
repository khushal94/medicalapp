<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	protected $table = 'appointments';

	public $dates = [ 'date'];

	protected $fillable = [
        'user_id','doctor_id','first_time','covid_symptoms','date', 'time_start', 'time_end', 'visited', 'status', 'description'
    ];

	public function User(){
		return $this->hasOne('App\User','id','user_id');
	}
	public function Doctor(){
		return $this->hasOne('App\User','id','doctor_id');
	}
}
