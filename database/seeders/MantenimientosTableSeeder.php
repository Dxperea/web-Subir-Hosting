<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mantenimiento;

class MantenimientosTableSeeder extends Seeder
{
    /**'nombres',
        'referencia',
        'cantidad',
        'nombre_proveedor',
        'marca',
        'id_vehiculo
     * Run the database seeds.
     */
    public function run(): void
    {
        $mantenimientos = [
            [
            'nombre' =>           'Revision',
            'referencia' =>         'NULL',
            'cantidad' =>         '1',
            'nombre_proveedor' => 'Renault',
            'marca' =>            'Renault',
            'id_vehiculo' =>      '1'
            ],
            [
            'nombre' =>           'Revision',
            'referencia' =>         'NULL',
            'cantidad' =>         '1',
            'nombre_proveedor' => 'Scania',
            'marca' =>            'Scania',
            'id_vehiculo' =>      '2'
            ],
            [
            'nombre' =>           'Revision',
            'referencia' =>         'NULL',
            'cantidad' =>         '1',
            'nombre_proveedor' => 'Iveco',
            'marca' =>            'Iveco',
            'id_vehiculo' =>      '3'
            ],
        ];
        foreach($mantenimientos as $mantenimiento){
            Mantenimiento::create([
                'nombre' =>           $mantenimiento['nombre'],
                'referencia' =>         $mantenimiento['referencia'],
                'cantidad' =>         $mantenimiento['cantidad'],
                'nombre_proveedor' => $mantenimiento['nombre_proveedor'],
                'marca' =>            $mantenimiento['marca'],
                'id_vehiculo' =>      $mantenimiento['id_vehiculo']
            ]);
        }
    }
}
