<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription_drug extends Model
{

    protected $table = 'prescription_drugs';
    protected $fillable = [
        'prescription_id','drug_id','type','strength', 'dose', 'duration', 'drug_advice'
    ];

     public function Drug(){
    	        return $this->hasOne('App\Drug', 'id', 'drug_id');
    }
}
