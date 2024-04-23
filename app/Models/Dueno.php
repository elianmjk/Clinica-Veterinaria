<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    protected $fillable = ['nombre', 'apellido', 'dirección', 'teléfono', 'email'];

    public function mascotas()
    {
        return $this->hasMany(Mascota::class);
    }
    use HasFactory;
}
