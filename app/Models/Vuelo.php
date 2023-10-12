<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'origen',
        'destino',
        'fecha_hora',
        'precio',
    ];

    public function pasajeros()
    {
        return $this->belongsToMany(Pasajero::class, 'pasajero_vuelo');
    }
}
