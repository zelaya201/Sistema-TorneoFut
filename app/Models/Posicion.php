<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posicion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'posiciones';

    protected $fillable = [
        'nombre',
    ];

    public function jugadores() {
        return $this->hasMany(Jugador::class, 'id_equipo');
    }
}
