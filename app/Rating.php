<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	protected $table = 'ratings';
	protected $fillable = [
        'user_id','count','feedback', 'is_deleted'
    ];
}
