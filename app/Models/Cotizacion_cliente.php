<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion_cliente extends Model
{
    use HasFactory;
    protected $table = 'cotizacion_cliente';
    protected $priimaryKey = 'id';
    protected $fillable = [
        'valor',
        'id_usuario',
        'id_tipo_carga',
        'id_municipio_destino',
        'id_minicipio_origen',
    ];
}
