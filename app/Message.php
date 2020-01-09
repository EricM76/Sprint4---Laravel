<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $guarded = [];

    public function user()
   {
       return $this->hasOne('App\User', 'id', 'id_UserOrigin');
   }

   public function product()
   {
       return $this->hasOne('App\Product', 'id', 'truekeo');
   }

}
