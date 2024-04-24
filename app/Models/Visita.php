<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Visita extends Model
{
  
    use HasFactory;
  protected $table='visitas';
  protected $primarykey='id';
  protected $timestamp=false;


}
