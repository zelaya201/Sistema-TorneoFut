<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GolesPartido extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'goles_partidos';

    protected $fillable = [
        'id_partido',
        'id_jugador',
        'minuto',
    ];

    public function jugador(){
        return $this->belongsTo(Jugador::class, 'id_jugador');
    }

    public function partido(){
        return $this->belongsTo(Partido::class, 'id_partido');
    }
}
