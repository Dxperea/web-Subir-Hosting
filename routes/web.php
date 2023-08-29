<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\AutorizacionesController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\Registro_viajeController;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\Tipo_cargasController;
use App\Http\Controllers\Tipo_documentosController;
use App\Http\Controllers\Cotizacion_clientesController;
use App\Http\Controllers\MantenimientosController;
use App\Http\Controllers\Orden_comprasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Viatico_conductoresController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Rutas de Departamentos
Route::get('departamentos', [DepartamentosController::class, 'index'])->name('departamentos');
Route::get('departamentos/crear', [DepartamentosController::class, 'create'])->name('departamentos.crear');
Route::post('departamentos', [DepartamentosController::class, 'store'])->name('departamentos.guardar');
Route::delete('dapartementos/{id}', [DepartamentosController::class, 'delete'])->name('departamentos.eliminar');
Route::get('departamentos/{id}', [DepartamentosController::class, 'show'])->name('departamentos.detalles');
Route::get('departamentos/{id}/editar', [DepartamentosController::class, 'edit'])->name('departamentos.editar');
Route::put('dapartamentos/{id}', [DepartamentosController::class, 'update'])->name('departamentos.actualizar');
//Rutas compras
Route::get('compras', [ComprasController::class, 'index'])->name('compras');
Route::get('compras/crear', [ComprasController::class, 'create'])->name('compras.crear');
Route::post('compras', [ComprasController::class, 'store'])->name('compras.guardar');
Route::delete('compras/{id}', [ComprasController::class, 'delete'])->name('compras.eliminar');
Route::get('compras/{id}', [ComprasController::class, 'show'])->name('compras.detalles');
Route::get('compras/{id}/editar', [ComprasController::class, 'edit'])->name('compras.editar');
Route::put('compras/{id}', [ComprasController::class, 'update'])->name('compras.actualizar');
//Rutas autorizacion 
Route::get('autorizaciones', [AutorizacionesController::class, 'index'])->name('Autorizaciones');
Route::get('autorizaciones/crear', [AutorizacionesController::class, 'create'])->name('Autorizaciones.crear');
Route::post('autorizaciones', [AutorizacionesController::class, 'store'])->name('Autorizaciones.guardar');
Route::delete('autorizaciones/{id}', [AutorizacionesController::class, 'delete'])->name('Autorizaciones.eliminar');
Route::get('autorizaciones/{id}', [AutorizacionesController::class, 'show'])->name('Autorizaciones.detalles');
Route::get('autorizaciones/{id}/editar', [AutorizacionesController::class, 'edit'])->name('Autorizaciones.editar');
Route::put('autorizaciones/{id}', [AutorizacionesController::class, 'update'])->name('Autorizaciones.actualizar');
//Rutas Municipios
Route::get('municipios', [MunicipiosController::class, 'index'])->name('municipios');
Route::get('municipios/crear', [MunicipiosController::class, 'create'])->name('municipios.crear');
Route::post('municipios', [MunicipiosController::class, 'store'])->name('municipios.guardar');
Route::delete('municipios/{id}', [MunicipiosController::class, 'delete'])->name('municipios.eliminar');
Route::get('municipios/{id}', [MunicipiosController::class, 'show'])->name('municipios.detalles');
Route::get('municipios/{id}/editar', [MunicipiosController::class, 'edit'])->name('municipios.editar');
Route::put('municipios/{id}', [MunicipiosController::class, 'update'])->name('municipios.actualizar');
//Rutas Vehiculos
Route::get('vehiculos', [VehiculosController::class, 'index'])->name('vehiculos');
Route::get('vehiculos/crear', [VehiculosController::class, 'create'])->name('vehiculos.crear');
Route::post('vehiculos', [VehiculosController::class, 'store'])->name('vehiculos.guardar');
Route::delete('vehiculos/{id}', [VehiculosController::class, 'delete'])->name('vehiculos.eliminar');
Route::get('vehiculos/{id}', [VehiculosController::class, 'show'])->name('vehiculos.detalles');
Route::get('vehiculos/{id}/editar', [VehiculosController::class, 'edit'])->name('vehiculos.editar');
Route::put('vehiculos/{id}', [VehiculosController::class, 'update'])->name('vehiculos.actualizar');
//Rutas Facturas
Route::get('facturas', [FacturaController::class, 'index'])->name('facturas');
Route::get('facturas/crear', [FacturaController::class, 'create'])->name('facturas.crear');
Route::post('facturas', [FacturaController::class, 'store'])->name('facturas.guardar');
Route::delete('facturas/{id}', [FacturaController::class, 'delete'])->name('facturas.eliminar');
Route::get('facturas/{id}', [FacturaController::class, 'show'])->name('facturas.detalles');
Route::get('facturas/{id}/editar', [FacturaController::class, 'edit'])->name('facturas.editar');
Route::put('facturas/{id}', [FacturaController::class, 'update'])->name('facturas.actualizar');
//Rutas Proveedores
Route::get('proveedores', [ProveedorController::class, 'index'])->name('proveedores');
Route::get('proveedores/crear', [ProveedorController::class, 'create'])->name('proveedores.crear');
Route::post('proveedores', [ProveedorController::class, 'store'])->name('proveedores.guardar');
Route::delete('proveedores/{id}', [ProveedorController::class, 'delete'])->name('proveedores.eliminar');
Route::get('proveedores/{id}', [ProveedorController::class, 'show'])->name('proveedores.detalles');
Route::get('proveedores/{id}/editar', [ProveedorController::class, 'edit'])->name('proveedores.editar');
Route::put('proveedores/{id}', [ProveedorController::class, 'update'])->name('proveedores.actualizar');
//Rutas Registro_Viajes
Route::get('registro_viajes', [Registro_viajeController::class, 'index'])->name('registro_viajes');
Route::get('registro_viajes/crear', [Registro_viajeController::class, 'create'])->name('registro_viajes.crear');
Route::post('registro_viajes', [Registro_viajeController::class, 'store'])->name('registro_viajes.guardar');
Route::delete('registro_viajes/{id}', [Registro_viajeController::class, 'delete'])->name('registro_viajes.eliminar');
Route::get('registro_viajes/{id}', [Registro_viajeController::class, 'show'])->name('registro_viajes.detalles');
Route::get('registro_viajes/{id}/editar', [Registro_viajeController::class, 'edit'])->name('registro_viajes.editar');
Route::put('registro_viajes/{id}', [Registro_viajeController::class, 'update'])->name('registro_viajes.actualizar');
//Rutas Cargos
Route::get('cargos', [CargosController::class, 'index'])->name('cargos');
Route::get('cargos/crear', [CargosController::class, 'create'])->name('cargos.crear');
Route::post('cargos', [CargosController::class, 'store'])->name('cargos.guardar');
Route::delete('cargos/{id}', [CargosController::class, 'delete'])->name('cargos.eliminar');
Route::get('cargos/{id}', [CargosController::class, 'show'])->name('cargos.detalles');
Route::get('cargos/{id}/editar', [CargosController::class, 'edit'])->name('cargos.editar');
Route::put('cargos/{id}', [CargosController::class, 'update'])->name('cargos.actualizar');
//Rutas Tipo de Cargas
Route::get('tipo_cargas', [Tipo_cargasController::class, 'index'])->name('tipo_cargas');
Route::get('tipo_cargas/crear', [Tipo_cargasController::class, 'create'])->name('tipo_cargas.crear');
Route::post('tipo_cargas', [Tipo_cargasController::class, 'store'])->name('tipo_cargas.guardar');
Route::delete('tipo_cargas/{id}', [Tipo_cargasController::class, 'delete'])->name('tipos_cargas.eliminar');
Route::get('tipo_cargas/{id}', [Tipo_cargasController::class, 'show'])->name('tipo_cargas.detalles');
Route::get('tipo_cargas/{id}/editar', [Tipo_cargasController::class, 'edit'])->name('tipo_cargas.editar');
Route::put('tipo_cargas/{id}', [Tipo_cargasController::class, 'update'])->name('tipo_cargas.actualizar');
//Rutas Tipo de Documentos
Route::get('tipo_documentos', [Tipo_documentosController::class, 'index'])->name('tipo_documentos');
Route::get('tipo_documentos/crear', [Tipo_documentosController::class, 'create'])->name('tipo_documentos.crear');
Route::post('tipo_documentos', [Tipo_documentosController::class, 'store'])->name('tipo_documentos.guardar');
Route::delete('tipo_documentos/{id}', [Tipo_documentosController::class, 'delete'])->name('tipo_documentos.eliminar');
Route::get('tipo_documentos/{id}', [Tipo_documentosController::class, 'show'])->name('tipo_documentos.detalles');
Route::get('tipo_documentos/{id}/editar', [Tipo_documentosController::class, 'edit'])->name('tipo_documentos.editar');
Route::put('tipo_documentos/{id}', [Tipo_documentosController::class, 'update'])->name('tipo_documentos.actualizar');
//Rutas Contizacion de Clientes
Route::get('cotizacion_clientes', [Cotizacion_clientesController::class, 'index'])->name('cotizacion_clientes');
Route::get('cotizacion_clientes/crear', [Cotizacion_clientesController::class, 'create'])->name('cotizacion_clientes.crear');
Route::post('cotizacion_clientes', [Cotizacion_clientesController::class, 'store'])->name('cotizacion_clientes.guardar');
Route::delete('cotizacion_clientes/{id}', [Cotizacion_clientesController::class, 'delete'])->name('cotizacion_clientes.eliminar');
Route::get('cotizacion_clientes/{id}', [Cotizacion_clientesController::class, 'show'])->name('cotizacion_clientes.detalles');
Route::get('cotizacion_clientes/{id}/editar', [Cotizacion_clientesController::class, 'edit'])->name('cotizacion_clientes.editar');
Route::put('cotizacion_clientes/{id}', [Cotizacion_clientesController::class, 'update'])->name('cotizacion_clientes.actualizar');
//Rutas Mantenimientos
Route::get('mantenimientos', [MantenimientosController::class, 'index'])->name('mantenimientos');
Route::get('mantenimientos/crear', [MantenimientosController::class, 'create'])->name('mantenimientos.crear');
Route::post('mantenimientos', [MantenimientosController::class, 'store'])->name('mantenimientos.guardar');
Route::delete('mantenimientos/{id}', [MantenimientosController::class, 'delete'])->name('mantenimientos.eliminar');
Route::get('mantenimientos/{id}', [MantenimientosController::class, 'show'])->name('mantenimientos.detalles');
Route::get('mantenimientos/{id}/editar', [MantenimientosController::class, 'edit'])->name('mantenimientos.editar');
Route::put('mantenimientos/{id}', [MantenimientosController::class, 'update'])->name('mantenimientos.actualizar');
//Rutas Orden de compras
Route::get('orden_compras', [Orden_comprasController::class, 'index'])->name('orden_compras');
Route::get('orden_compras/crear', [Orden_comprasController::class, 'create'])->name('orden_compras.crear');
Route::post('orden_compras', [Orden_comprasController::class, 'store'])->name('orden_compras.guardar');
Route::delete('orden_compras/{id}', [Orden_comprasController::class, 'delete'])->name('orden_compras.eliminar');
Route::get('orden_compras/{id}', [Orden_comprasController::class, 'show'])->name('orden_compras.detalles');
Route::get('orden_compras/{id}/editar', [Orden_comprasController::class, 'edit'])->name('orden_compras.editar');
Route::put('orden_compras/{id}', [Orden_comprasController::class, 'update'])->name('orden_compras.actualizar');
//Rutas usuarios
Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios');
Route::get('usuarios/crear', [UsuariosController::class, 'create'])->name('usuarios.crear');
Route::post('usuarios', [UsuariosController::class, 'store'])->name('usuarios.guardar');
Route::delete('usuarios/{id}', [UsuariosController::class, 'delete'])->name('usuarios.eliminar');
Route::get('usuarios/{id}', [UsuariosController::class, 'show'])->name('usuarios.detalles');
Route::get('usuarios/{id}/editar', [UsuariosController::class, 'edit'])->name('usuarios.editar');
Route::put('usuarios/{id}', [UsuariosController::class, 'update'])->name('usuarios.actualizar');
//Rutas Viaticos del conductor
Route::get('viatico_conductores', [Viatico_conductoresController::class, 'index'])->name('viatico_conductores');
Route::get('viatico_conductores/crear', [Viatico_conductoresController::class, 'create'])->name('viatico_conductores.crear');
Route::post('viatico_conductores', [Viatico_conductoresController::class, 'store'])->name('viatico_conductores.guardar');
Route::delete('viatico_conductores/{id}', [Viatico_conductoresController::class, 'delete'])->name('viatico_conductores.eliminar');
Route::get('viatico_conductores/{id}', [Viatico_conductoresController::class, 'show'])->name('viatico_conductores.detalles');
Route::get('viatico_conductores/{id}/editar', [Viatico_conductoresController::class, 'edit'])->name('viatico_conductores.editar');
Route::put('viatico_conductores/{id}', [Viatico_conductoresController::class, 'update'])->name('viatico_conductores.actualizar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
