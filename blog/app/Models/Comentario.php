<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'comentario';

    protected $primaryKey = 'idComentario';

    public $timestamps = false;

    protected $fillable = [
        'contenidoComentario',
        'fechaPublicacionComentario',
        'activo',
        'idTrailer_Comentario',
        'idUsuario_Comentario'
    ];
}
