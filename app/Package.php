<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
        protected $table = 'package';
        protected $fillable = [
                'name','description','lab_name', 'lab_test_ids', 'rate', 'is_active', 'image'
        ];
}
