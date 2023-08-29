<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //Para visualizar los ya agragados a la base de datos
    public function index(){
        $proveedor=proveedor::all();
        return view('proveedores.index', compact('proveedor'));
    }
    //Para crear o agregar
    public function create(){
        return view('proveedores.create');
    }
    public function store(Request $request){
        Proveedor::create($request->all());
        return redirect()->route('proveedores');
    }
    //Para borrar o eleminar
    public function delete($id){
        Proveedor::find($id)->delete();
        return redirect()->route('proveedores');
    } 
    //Para mostrar mas detalles
    public function show($id){
        $proveedor = Proveedor::find($id);
        return view('proveedores.show', compact('proveedor'));
    }
    //Para editar y actualizar
    public function edit($id){
        $proveedor = Proveedor::find($id);
        return view('proveedores.edit', compact('proveedor'));
    }
    public function update(Request $request, $id){
        $proveedor = Proveedor::find($id)->update($request->all());
        return redirect()->route('proveedores');
    }
}
