<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'torneos';

    protected $fillable = [
        'nombre',
        'estado',
        'id_organizador',
    ];

    public function organizador() {
        return $this->belongsTo(Organizador::class, 'id_organizador');
    }

    public function torneoEquipos() {
        return $this->hasMany(TorneoEquipo::class, 'id_torneo');
    }
}
