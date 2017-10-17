<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Sitter extends Authenticatable
{


  protected $fillable = [
      'name', 'email', 'password','phone_number','whatsapp_number','res_address','city','postcode','dogs','outdoor','dogwalks','food','bio',
  ];

  
   protected $hidden = [
       'password', 'remember_token',
   ];

}