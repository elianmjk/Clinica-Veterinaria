<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable=['nombre', 'especie', 'raza', 'edad', 'dueño_id'];
    public function dueño()
    {
        return $this->belongsTo(Dueño::class, 'dueño_id');
    }

    public function visitas()
    {
        return $this->hasMany(Visita::class);
    }
    use HasFactory;
}
