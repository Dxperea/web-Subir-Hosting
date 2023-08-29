<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaticos_Conductor extends Model
{
    use HasFactory;
    protected $table = 'viaticos_conductor';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'costo',
        'fecha',
        'evidencia',
        'tipo',
        'id_registro_viaje',
    ];
}
