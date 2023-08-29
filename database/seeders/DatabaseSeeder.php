<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\Tipo_documentoController;
use App\Models\Proveedor;
use App\Models\Tipo_Documento;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CargosTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(Tipo_cargasTableSeeder::class);
        $this->call(Tipo_documentosTableSeeder::class);  
        $this->call(VehiculosTableSeeder::class);   
        $this->call(MantenimientosTableSeeder::class);
        $this->call(MunicipiosTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(Orden_compraTableSeeder::class);
        $this->call(AutorizacionTableSeeder::class);
        $this->call(CompraTableSeeder::class);
        $this->call(Cotizacion_clienteTableSeeder::class);
        $this->call(Registro_viajeTableSeeder::class);
        $this->call(FacturaTableSeeder::class);
        $this->call(Viaticos_conductorTableSeeder::class);
        $this->call(ProveedorTableSeeder::class);
    }
}
