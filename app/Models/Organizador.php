<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'genero',
        'telefono',
        'email',
    ];
}
