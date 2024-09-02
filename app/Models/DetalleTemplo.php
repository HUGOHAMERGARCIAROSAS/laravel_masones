<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTemplo extends Model
{
    use HasFactory;

    protected $table = 'detalle_templo';

    protected $fillable = [
        'archivo',
        'id_templo',
        'activo',
    ];
}
