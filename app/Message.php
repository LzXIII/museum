<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $fillable = [
      'f_name', 'l_name', 'phone', 'message', 'email',
  ];
}
