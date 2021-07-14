<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{

	protected $table = 'billings';

    public function User(){
    	        return $this->hasOne('App\User', 'id', 'user_id');
    }
    protected $fillable = [
      'user_id','payment_mode','payment_status', 'reference'
    ];
    
      public function Items(){
    	        return $this->hasMany('App\Billing_item');
    }
}
