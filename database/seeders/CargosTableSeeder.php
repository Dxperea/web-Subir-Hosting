<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cargo;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargos = [
            ['nombre'=>'Gerente'],
            ['nombre'=>'Administrador'],
            ['nombre'=>'aux_administrador'],
            ['nombre'=>'Almacenista'],
            ['nombre'=>'Conductor'],
            ['nombre'=>'Cliente'],
        ];
        foreach($cargos as $cargo){
            Cargo::create([
                'nombre' => $cargo['nombre']
            ]);
        }
    }
}
