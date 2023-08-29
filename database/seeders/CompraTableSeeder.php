<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Compra;

class CompraTableSeeder extends Seeder
{
    /**'fecha',
        'producto',
        'costo',
        'evidencia',
        'id_autorizacion'
     * Run the database seeds.
     */
    public function run(): void
    {
        $compras = [
            [
                'fecha' =>          '2003-01-25',
                'producto' =>       'Retrovisor',
                'costo' =>          '500000',
                'evidencia' =>      'NULL',
                'id_autorizacion' =>'2',
            ],
            [
                'fecha' =>          '2003-01-06',
                'producto' =>       'Disco de embrague',
                'costo' =>          '1250000',
                'evidencia' =>      'NULL',
                'id_autorizacion' =>'3',
            ],
        ];
        foreach($compras as $compra){
            Compra::create([
                'fecha' =>          $compra['fecha'],
                'producto' =>       $compra['producto'],
                'costo' =>          $compra['costo'],
                'evidencia' =>      $compra['evidencia'],
                'id_autorizacion' =>$compra['id_autorizacion']
            ]);
        }
    }
}
