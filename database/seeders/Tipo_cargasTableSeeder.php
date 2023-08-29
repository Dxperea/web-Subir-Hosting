<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo_Carga;

class Tipo_cargasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_cargas = [
            [
                'nombre'=>      'Frutas y verduras',
                'peso'=>        '3',
                'tipo'=>        'Perecedera',
                'valor_flete'=> '100000',
                'valor_seguro'=>'200000',
            ],
            [
                'nombre'=>      'Gases',
                'peso'=>        '5',
                'tipo'=>        'Peligrosa',
                'valor_flete'=> '1200000',
                'valor_seguro'=>'2250000',
            ],
            [
                'nombre'=>      'Alimentos en estado liquido',
                'peso'=>        '3',
                'tipo'=>        'Granel liquido',
                'valor_flete'=> '1250000',
                'valor_seguro'=>'2150000',
            ],
            [
                'nombre'=>      'Granos de maiz',
                'peso'=>        '2 ',
                'tipo'=>        'Granel solido',
                'valor_flete'=> '21500000',
                'valor_seguro'=>'32500000',
            ]
        ];
        foreach($tipo_cargas as $tipo_carga){
            Tipo_Carga::create([
                'nombre'=>      $tipo_carga['nombre'],
                'peso'=>        $tipo_carga['peso'],
                'tipo'=>        $tipo_carga['tipo'],
                'valor_flete'=> $tipo_carga['valor_flete'],
                'valor_seguro'=>$tipo_carga['valor_seguro']
            ]);
        }
    }
}
