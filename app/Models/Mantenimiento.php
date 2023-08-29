<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;
    protected $table = 'mantenimientos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'referencia',
        'cantidad',
        'nombre_proveedor',
        'marca',
        'id_vehiculo',
    ];
}
