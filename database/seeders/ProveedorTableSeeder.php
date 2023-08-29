<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorTableSeeder extends Seeder
{
    /**'razon_social',
        '',
        'nit',
        'camara_comercio',
        'id_compra'
     * Run the database seeds.
     */
    public function run(): void
    {
        $proveedores = [
            [
                'razon_social' =>   'NULL',
                'ciudad' =>         'Ciudad1',
                'nit' =>            '1234567',
                'camara_comercio' =>'NULL',
                'id_compra' =>      '1'
            ],
            [
                'razon_social' =>   'NULL',
                'ciudad' =>         'Ciudad2',
                'nit' =>            '321654',
                'camara_comercio' =>'NULL',
                'id_compra' =>      '2'
            ],
        ];
        foreach($proveedores as $proveedor){
            Proveedor::create([
                    'razon_social' =>   $proveedor['razon_social'],
                    'ciudad' =>         $proveedor['ciudad'],
                    'nit' =>            $proveedor['nit'],
                    'camara_comercio' =>$proveedor['camara_comercio'],
                    'id_compra' =>      $proveedor['id_compra']
            ]);
        }
    }
}
