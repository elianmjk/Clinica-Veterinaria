<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mascota extends Model
{
    
    use HasFactory;
   protected $table='mascotas';
   public function dueno(){
    return $this->BelongsTo(Dueno::class,'dueno_id'); //UNA MASCOTA PERTENECE A UN DUEÑO.
   }
   public function visita(){
   return $this->hasMany(Visita::class,'mascotas_id'); //UNA MASCOTA TIENE MUCHAS VISITAS.
   }

}
