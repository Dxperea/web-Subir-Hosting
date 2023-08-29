<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo_Documento;


class Tipo_documentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_documentos = [
            ['nombre'=>'CC'],
            ['nombre'=>'CE'],
            ['nombre'=>'NIP'],
            ['nombre'=>'NIT'],
            ['nombre'=>'PAP']
        ];
        foreach($tipo_documentos as $tipo_documento){
            Tipo_Documento::create([
                'nombre'=>$tipo_documento['nombre']
            ]);
        }
    }
}
