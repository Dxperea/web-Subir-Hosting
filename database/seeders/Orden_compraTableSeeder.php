<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orden_compra;

class Orden_compraTableSeeder extends Seeder
{
    /**'fecha',
        'cantidad',
        'producto',
        'evidencia',
        'autorizado',
        'id_usuario'
     * Run the database seeds.
     */
    public function run(): void
    {
        $ordenes_compra = [
            [
                'fecha' =>      '2022-06-15',
                'cantidad' =>   '10',
                'producto' =>   'Papel',
                'evidencia' =>  'NULL',
                'autorizado' => 'no',
                'id_usuario' => '1',
            ],
            [
                'fecha' =>      '2022-06-16',
                'cantidad' =>   '10',
                'producto' =>   'Boligrafos',
                'evidencia' =>  'NULL',
                'autorizado' => 'no',
                'id_usuario' => '1',
            ],
            [
                'fecha' =>      '2022-06-17',
                'cantidad' =>   '15',
                'producto' =>   'Boligrafos',
                'evidencia' =>  'NULL',
                'autorizado' => 'no',
                'id_usuario' => '1',
            ],
            [
                'fecha' =>      '2022-06-18',
                'cantidad' =>   '11',
                'producto' =>   'Boligrafos',
                'evidencia' =>  'NULL',
                'autorizado' => 'no',
                'id_usuario' => '1',
            ],
        ];
        foreach($ordenes_compra as $orden_compra){
            Orden_compra::create([
                'fecha' =>      $orden_compra['fecha'],
                'cantidad' =>   $orden_compra['cantidad'],
                'producto' =>   $orden_compra['producto'],
                'evidencia' =>  $orden_compra['evidencia'],
                'autorizado' => $orden_compra['autorizado'],
                'id_usuario' => $orden_compra['id_usuario']
            ]);
        }
    }
}
