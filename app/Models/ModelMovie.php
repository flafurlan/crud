<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMovie extends Model
{
   // use HasFactory;
   protected $table='movie';

   public function relUsers()
    {
        return $this->hasOne ('App\Models\User','id','id_user');
    }
}
