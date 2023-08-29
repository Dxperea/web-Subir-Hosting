<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_compra extends Model
{
    use HasFactory;
    protected $table = 'orden_compra';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fecha',
        'cantidad',
        'producto',
        'evidencia',
        'autorizado',
        'id_usuario'
    ];
}
