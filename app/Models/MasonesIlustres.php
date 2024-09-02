<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasonesIlustres extends Model
{
    use HasFactory;

    protected $table = 'masones_ilustres';

    protected $fillable = [
        'titulo',
        'descripcion',
        'activo',
    ];
}
