<?php

namespace App;

use App\Categories;
use App\Menu;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chat';

    protected $fillable = ['user_id', 'to_user_id', 'message', 'message_time', 'status'];
}