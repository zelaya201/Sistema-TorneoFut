<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'jornadas';

    protected $fillable = [
        'numero',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function partidos() {
        return $this->hasMany(Partido::class);
    }
}
