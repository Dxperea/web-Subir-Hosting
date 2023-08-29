<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autorizacion;

class AutorizacionTableSeeder extends Seeder
{
    /**'fecha',
        'valor_compra',
        'evidencia',
        'id_orden_compra',
        'id_usuario'
     * Run the database seeds.
     */
    public function run(): void
    {
        $autorizaciones = [
            [
                'fecha' =>              '2022-06-16',
                'valor_compra' =>       '50000',
                'evidencia' =>          'NULL',
                'id_orden_compra' =>    '1',
                'id_usuario' =>         '2'
            ],
            [
                'fecha' =>              '2022-06-17',
                'valor_compra' =>       '50000',
                'evidencia' =>          'NULL',
                'id_orden_compra' =>    '2',
                'id_usuario' =>         '2'
            ],
            [
                'fecha' =>              '2022-06-18',
                'valor_compra' =>       '50000',
                'evidencia' =>          'NULL',
                'id_orden_compra' =>    '3',
                'id_usuario' =>         '2'
            ],
            [
                'fecha' =>              '2022-06-19',
                'valor_compra' =>       '50000',
                'evidencia' =>          'NULL',
                'id_orden_compra' =>    '4',
                'id_usuario' =>         '2'
            ],
        ];
        foreach($autorizaciones as $autorizacion){
            Autorizacion::create([
                'fecha' =>              $autorizacion['fecha'],
                'valor_compra' =>       $autorizacion['valor_compra'],
                'evidencia' =>          $autorizacion['evidencia'],
                'id_orden_compra' =>    $autorizacion['id_orden_compra'],
                'id_usuario' =>         $autorizacion['id_usuario']
            ]);
        }
    }
}
