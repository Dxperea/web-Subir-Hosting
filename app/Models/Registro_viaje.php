<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro_viaje extends Model
{
    use HasFactory;
    protected $table = 'registro_viaje';
    protected $primaryKey = 'id';
    protected $fillable = [
        'direccion',
        'fecha_entrega',
        'fecha_carga',
        'id_tipo_carga',
        'id_municipio_origen',
        'id_municipio_destino',
        'id_vehiculo',
        'id_usuario',
        'id_cotizacion_cliente'
    ];
}
