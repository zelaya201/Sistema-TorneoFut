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
}
