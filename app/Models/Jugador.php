<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'jugadores';

    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'estatura',
        'estado',
        'id_posicion',
        'id_equipo',
    ];

    public function equipo() {
        return $this->belongsTo(Equipo::class, 'id_equipo');
    }

    public function posicion(){
        return $this->belongsTo(Posicion::class, 'id_posicion');
    }

    public function goles() {
        return $this->hasMany(GolesPartido::class);
    }
}
