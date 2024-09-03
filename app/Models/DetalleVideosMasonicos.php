<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVideosMasonicos extends Model
{
    use HasFactory;

    protected $table = 'detalle_videos_masonicos';

    protected $fillable = [
        'id_videos_masonicos',
        'link',
        'tipo',
        'detalle',
        'activo',
    ];
}
