<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $fillable = ['mascota_id', 'fecha_visita', 'motivo', 'tratamiento'];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }
    use HasFactory;
}
