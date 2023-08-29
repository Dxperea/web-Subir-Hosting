<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Carga extends Model
{
    use HasFactory;
    protected $table = 'tipo_cargas';
    protected $primaryKey = 'id';
    protected $fillable=[
        'nombre',
        'peso',
        'tipo',
        'valor_flete',
        'valor_seguro'
    ];
}
