<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mascota extends Model
{
    
    use HasFactory;
   protected $table='mascotas';
   protected $primarykey='id';
   
   protected $timestamp=false;
   

}
