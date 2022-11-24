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

    public function equipoLocal() {
        return $this->belongsTo(Equipo::class, 'equipo_local');
    }

    public function equipoVisitante() {
        return $this->belongsTo(Equipo::class, 'equipo_visitante');
    }

    public function jornada() {
        return $this->belongsTo(Jornada::class, 'id_jornada');
    }

    public function goles() {
        return $this->hasMany(GolesPartido::class);
    }
}
