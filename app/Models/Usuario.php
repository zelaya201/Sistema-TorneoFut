<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;  

class Usuario extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'usuarios';

    protected $fillable = [
        'nickname',
        'id_organizador',
    ];

    protected $hidden = [
        'password',
    ];

    public function organizador() {
        return $this->belongsTo(Organizador::class, 'id_organizador');
    }
}
