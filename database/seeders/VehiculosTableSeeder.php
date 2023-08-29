<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculosTableSeeder extends Seeder
{
    /**
     * 'nombre',
     *   'placa',
     *   'marca',
     *   'modelo',
     *   'color'
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehiculos = [
            [
                'nombre'=>  'Camion1',
                'placa'=>   '123abc',
                'marca'=>   'RENAULT',
                'modelo'=>  'Renault Truck C',
                'color'=>   'Azul'
            ],
            [
                'nombre'=>  'Camion2',
                'placa'=>   'cba321',
                'marca'=>   'SCANIA camiones',
                'modelo'=>  'Serie P',
                'color'=>   'Rojo'
            ],
            [
                'nombre'=>  'Camion3',
                'placa'=>   'def456',
                'marca'=>   'Camion IVECO',
                'modelo'=>  'Stralis',
                'color'=>   'Verde'
            ],
            [
                'nombre'=>  'Camion4',
                'placa'=>   '654fed',
                'marca'=>   'Camion Volkswagen',
                'modelo'=>  'Constellation',
                'color'=>   'Amarillo'
            ],
            [
                'nombre'=>  'Camnion5',
                'placa'=>   '789ghi',
                'marca'=>   'Camion mercedes',
                'modelo'=>  'FA 9.6',
                'color'=>   'Negro'
            ],
        ];
        foreach($vehiculos  as $vehiculo){
            Vehiculo::create([
                'nombre'=>  $vehiculo ['nombre'],
                'placa'=>   $vehiculo  ['placa'],
                'marca'=>   $vehiculo  ['marca'],
                'modelo'=>  $vehiculo ['modelo'],
                'color'=>   $vehiculo  ['color']
            ]);
        }
    }
}
