<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cotizacion_cliente;

class Cotizacion_clienteTableSeeder extends Seeder
{
    /**'valor',
        'id_usuario',
        'id_tipo_carga',
        'id_municipio_destino',
        'id_minicipio_origen',
     * Run the database seeds.
     */
    public function run(): void
    {
        $cotizaciones_cliente = [
            [
                'valor' =>                  '2250000',
                'id_usuario' =>             '4',
                'id_tipo_carga' =>          '2',
                'id_municipio_destino' =>   '2',
                'id_minicipio_origen' =>    '1',
            ],
            [
                'valor' =>                  '2450000',
                'id_usuario' =>             '4',
                'id_tipo_carga' =>          '1',
                'id_municipio_destino' =>   '1',
                'id_minicipio_origen' =>    '2',
            ],
        ];
        foreach($cotizaciones_cliente as $cotizacion_cliente){
            Cotizacion_cliente::create([
                    'valor' =>                  $cotizacion_cliente['valor'],
                    'id_usuario' =>             $cotizacion_cliente['id_usuario'],
                    'id_tipo_carga' =>          $cotizacion_cliente['id_tipo_carga'],
                    'id_municipio_destino' =>   $cotizacion_cliente['id_municipio_destino'],
                    'id_minicipio_origen' =>    $cotizacion_cliente['id_minicipio_origen'],
            ]);
        }
    }
}
