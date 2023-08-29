<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Registro_viaje;

class Registro_viajeTableSeeder extends Seeder
{
    /**'direccion',
        'fecha_entrega',
        'fecha_carga',
        'id_tipo_carga',
        'id_municipio_origen',
        'id_municipio_destino',
        'id_vehiculo',
        'id_usuario',
        'id_cotizacion_cliente'
     * Run the database seeds.
     */
    public function run(): void
    {
        $registros_viaje = [
            [
                'direccion' =>              'Calle 741 147',
                'fecha_entrega' =>          '2021-06-01',
                'fecha_carga' =>            '2021-05-31',
                'id_tipo_carga' =>          '2',
                'id_municipio_origen' =>    '1',
                'id_municipio_destino' =>   '2',
                'id_vehiculo' =>            '3',
                'id_usuario' =>             '4',
                'id_cotizacion_cliente' =>  '1',
            ],
        ];
        foreach($registros_viaje as $registro_viaje){
            Registro_viaje::create([
                'direccion' =>              $registro_viaje['direccion'],
                'fecha_entrega' =>          $registro_viaje['fecha_entrega'],
                'fecha_carga' =>            $registro_viaje['fecha_carga'],
                'id_tipo_carga' =>          $registro_viaje['id_tipo_carga'],
                'id_municipio_origen' =>    $registro_viaje['id_municipio_origen'],
                'id_municipio_destino' =>   $registro_viaje['id_municipio_destino'],
                'id_vehiculo' =>            $registro_viaje['id_vehiculo'],
                'id_usuario' =>             $registro_viaje['id_usuario'],
                'id_cotizacion_cliente' =>  $registro_viaje['id_cotizacion_cliente'],
            ]);
        }
    }
}
