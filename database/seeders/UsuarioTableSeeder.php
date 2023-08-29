<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioTableSeeder extends Seeder
{
    /**'nombre',
        'apellido',
        'numero_identificacion',
        'genero',
        'numero_telefono',
        'direccion_residencia',
        'correo',
        'contraseña',
        'id_tipo_documento',
        'id_cargo',
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            [
                'nombre' =>                 'Juan',
                'apellido' =>               'Francisco',
                'numero_identificacion' =>  '74185296',
                'genero' =>                 'Masculino',
                'numero_telefono' =>        '12345678',
                'direccion_residencia' =>   'Calle 123 123',
                'correo' =>                 'Juan@gmail.com',
                'contraseña' =>             '987654321',
                'id_tipo_documento' =>      '1',
                'id_cargo' =>               '1',
            ],
            [
                'nombre' =>                 'Juana',
                'apellido' =>               'Torres',
                'numero_identificacion' =>  '74564461',
                'genero' =>                 'Femenina',
                'numero_telefono' =>        '96385274',
                'direccion_residencia' =>   'Calle 321 321',
                'correo' =>                 'JuanaT@gmail.com',
                'contraseña' =>             'contraseña',
                'id_tipo_documento' =>      '1',
                'id_cargo' =>               '3',
            ],
            [
                'nombre' =>                 'Juana',
                'apellido' =>               'Morales',
                'numero_identificacion' =>  '74987046',
                'genero' =>                 'Femenina',
                'numero_telefono' =>        '96875222',
                'direccion_residencia' =>   'Calle 312 312',
                'correo' =>                 'JuanaMora@gmail.com',
                'contraseña' =>             '0d315d055',
                'id_tipo_documento' =>      '1',
                'id_cargo' =>               '4',
            ],
            [
                'nombre' =>                 'Jhon',
                'apellido' =>               'Morales',
                'numero_identificacion' =>  '72977046',
                'genero' =>                 'Masculino',
                'numero_telefono' =>        '46885321',
                'direccion_residencia' =>   'Calle 312 312',
                'correo' =>                 'JhonMora@gmail.com',
                'contraseña' =>             '0e318d055',
                'id_tipo_documento' =>      '2',
                'id_cargo' =>               '6',
            ],
        ];
        foreach($usuarios as $usuario){
            Usuario::create([
                    'nombre' =>                 $usuario['nombre'],
                    'apellido' =>               $usuario['apellido'],
                    'numero_identificacion' =>  $usuario['numero_identificacion'],
                    'genero' =>                 $usuario['genero'],
                    'numero_telefono' =>        $usuario['numero_telefono'],
                    'direccion_residencia' =>   $usuario['direccion_residencia'],
                    'correo' =>                 $usuario['correo'],
                    'contraseña' =>             $usuario['contraseña'],
                    'id_tipo_documento' =>      $usuario['id_tipo_documento'],
                    'id_cargo' =>               $usuario['id_cargo'],
            ]);
        }
    }
}
