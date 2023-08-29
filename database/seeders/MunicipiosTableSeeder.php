<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Municipio;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            [
                'nombre' => 'Leticia',
                'id_departamento' => '1'
            ],
            [
                'nombre' => 'El Encanto',
                'id_departamento' => '1'
            ],
            [
                'nombre' => 'La Chorrera',
                'id_departamento' => '1'
            ],
            [
                'nombre' => 'Ituango',
                'id_departamento' => '2'
            ],
            [
                'nombre' => 'Medellin',
                'id_departamento' => '2'
            ],
            [
                'nombre' => 'Rio Negro',
                'id_departamento' => '2'
            ],
            [
                'nombre' => 'Arauquita',
                'id_departamento' => '3'
            ],
            [
                'nombre' => 'Arauca capital',
                'id_departamento' => '3'
            ],
            [
                'nombre' => 'Saravena',
                'id_departamento' => '3'
            ],
        ];
        foreach($municipios as $municipio){
            Municipio::create([
                'nombre'         =>$municipio['nombre'],
                'id_departamento'=>$municipio['id_departamento']
            ]);
        }
    }
}
