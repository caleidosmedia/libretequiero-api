<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $fillable = [
        'animal_id',
        'animal',
        'cantidad',
        'condicion',
        'descripcion',
        'coordenadas',
        'denunciante',
        'imagen'
    ];
}