<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Visita extends Model
{
  
    use HasFactory;
    public function mascotas(){

     return $this->BelongsTo(Mascota::class,'mascotas_id');  //VISITA PERTENECES A UNA PERSONA ESPECIFICA 

    }
}
