<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosMasonicos extends Model
{
    use HasFactory;

    protected $table = 'videos_masonicos';

    protected $fillable = [
        'descripcion',
        'activo'
    ];
}
