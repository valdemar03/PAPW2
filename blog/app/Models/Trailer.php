<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    use HasFactory;

    protected $table = 'trailer';

    protected $primaryKey = 'idTrailer';

    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'contenido',
        'fechaPublicacion',
        'activo',
        'idUsuario_Trailer'
    ];

    protected $guarded = [

    ];
}
