<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamentos = [
            ['nombre'=>'Amazonas'],
            ['nombre'=>'Antioquia'],
            ['nombre'=>'Arauca'],
            ['nombre'=>'Atlántico'],
            ['nombre'=>'Bogotá'],
            ['nombre'=>'Bolívar'],
            ['nombre'=>'Boyacá'],
            ['nombre'=>'Caldas'],
            ['nombre'=>'Caquetá	'],
            ['nombre'=>'Casanare'],
            ['nombre'=>'Cauca'],
            ['nombre'=>'Cesar'],
            ['nombre'=>'Chocó'],
            ['nombre'=>'Córdoba'],
            ['nombre'=>'Cundinamarca'],
            ['nombre'=>'Guainía'],
            ['nombre'=>'Guaviare'],
        ];
        foreach($departamentos as $departamento){
            Departamento::create([
                'nombre' => $departamento['nombre']
            ]);
        }
    }
}
