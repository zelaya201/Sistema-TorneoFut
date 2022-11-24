<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TorneoEquipo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'torneo_equipos';

    protected $fillable = [
        'id_torneo',
        'id_equipo',
    ];

    public function equipo() {
        return $this->belongsTo(Equipo::class, 'id_equipo');
    }

    public function torneo() {
        return $this->belongsTo(Torneo::class, 'id_torneo');
    }
}
