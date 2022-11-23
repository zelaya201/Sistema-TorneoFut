<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'partidos';

    protected $fillable = [
        'fecha_partido',
        'equipo_local',
        'goles_local',
        'equipo_visitante',
        'goles_visitante',
        'estado',
        'id_jornada'
    ];
}
