<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
   
    
    use HasFactory;
   protected  $table='duenos'; //vamos a modificar esta tabla 
   public function mascotas(){

    return $this->hasMany(Mascota::class,'dueno_id'); //UN DUEÑO PUEDE TENER MULTIPLES MASCOTAS 

   }

}
