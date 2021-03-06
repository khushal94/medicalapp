<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */    
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function Patient(){
        return $this->hasOne('App\Patient');
    }

    public function Nurse(){
        return $this->hasOne('App\Nurse');
    }

    public function Doctor(){
        return $this->hasOne('App\Doctor');
    }


    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
}
