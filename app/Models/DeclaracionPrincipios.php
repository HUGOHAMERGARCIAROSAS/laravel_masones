<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclaracionPrincipios extends Model
{
    use HasFactory;

    protected $table = 'declaracion_principios';

    protected $fillable = [
        'descripcion',
        'images',
        'activo',
    ];
}
