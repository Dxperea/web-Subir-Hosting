<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autorizacion extends Model
{
    use HasFactory;
    protected $table = 'autorizacion';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fecha',
        'valor_compra',
        'evidencia',
        'id_orden_compra',
        'id_usuario'
    ];
}
