<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    public $table = 'ordenes';
    protected $fillable = [
        'nombre',
        'clase',
    ];
}
