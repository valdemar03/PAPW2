<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';

    protected $primaryKey = 'idUsuario';

    public $timestamps = false;

    protected $fillable = [
        'nombreUsuario',
        'apellidoPaterno',
        'apellidoMaterno',
        'username',
        'passwordUsuario',
        'tipoUsuario',
        'activo',
        'idImagen_Usuario'
    ];

    protected $guarded =[
        
    ];
}
