<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $guarded = [];

    public function userOrigin()
   {
       return $this->hasOne('App\User', 'id', 'id_UserOrigin');
   }

   public function userDestinity()
   {
       return $this->hasOne('App\User', 'id', 'id_UserDestinity');
   }

  public function productOrigin()
   {
       return $this->hasOne('App\Product', 'id', 'truekeoOrigin');
   }

   public function productDestinity()
   {
       return $this->hasOne('App\Product', 'id', 'truekeoDestinity');
   }

}
