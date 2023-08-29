<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table ='usuario';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'apellido',
        'numero_identificacion',
        'genero',
        'numero_telefono',
        'direccion_residencia',
        'correo',
        'contraseña',
        'id_tipo_documento',
        'id_cargo',
    ];
}
