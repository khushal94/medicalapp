<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription_test extends Model
{
        protected $table = 'prescription_tests';
        protected $fillable = [
            'prescription_id','test_id','description'
        ];

     public function Test(){
    	        return $this->hasOne('App\Test', 'id', 'test_id');
    }
}
