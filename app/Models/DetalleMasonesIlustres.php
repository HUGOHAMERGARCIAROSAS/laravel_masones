<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleMasonesIlustres extends Model
{
    use HasFactory;

    protected $table = 'detalle_masones_ilustres';

    protected $fillable = [
        'archivo',
        'id_masones_ilustre',
        'activo',
    ];
}
