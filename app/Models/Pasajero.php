<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
    ];

    public function vuelos()
    {
        return $this->belongsToMany(Vuelo::class, 'pasajero_vuelo');
    }
}
