<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'equipos';

    protected $fillable = [
        'nombre',
        'escudo',
        'estado',
    ];

    public function torneoEquipos() {
        return $this->hasMany(TorneoEquipo::class, 'id_equipo');
    }

    public function jugadores() {
        return $this->hasMany(Jugador::class, 'id_equipo');
    }

    public function partidos() {
        return $this->hasMany(Partido::class);
    }
}
