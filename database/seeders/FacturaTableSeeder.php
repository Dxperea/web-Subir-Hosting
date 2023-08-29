<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Factura;

class FacturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facturas = [
            [
                'fecha' =>            '2021-05-25',
                'id_registro_viaje' =>'1'
            ],
        ];
        foreach($facturas as $factura){
            Factura::create([
                'fecha' =>            $factura['fecha'],
                'id_registro_viaje' =>$factura['id_registro_viaje']
            ]);
        }
    }
}
