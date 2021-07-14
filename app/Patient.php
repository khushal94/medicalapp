<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $table = 'patients';
	protected $fillable = [
        'user_id','age','phone', 'birthday', 'gender', 'blood', 'weight', 'height','image', 'address', 'is_deleted'
    ];
}
