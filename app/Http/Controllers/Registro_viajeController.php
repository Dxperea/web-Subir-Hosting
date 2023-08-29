<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro_viaje; 

class registro_viajes extends Controller
{
    //Para visualizar los ya agragados a la base de datos
    public function index(){
        $registros_viaje=Registro_viaje::all();
        return view('registro_viajes.index', compact('registros_viaje'));
    }
    //Para crear o agregar
    public function create(){
        return view('registro_viajes.create');
    }
    public function store(Request $request){
        Registro_viaje::create($request->all());
        return redirect()->route('registro_viajes');
    }
    //Para borrar o eleminar
    public function delete($id){
        Registro_viaje::find($id)->delete();
        return redirect()->route('registro_viajes');
    } 
    //Para mostrar mas detalles
    public function show($id){
        $registro_viaje = Registro_viaje::find($id);
        return view('registro_viajes.show', compact('registro_viaje'));
    }
    //Para editar y actualizar
    public function edit($id){
        $registro_viaje = Registro_viaje::find($id);
        return view('registro_viajes.edit', compact('registro_viaje'));
    }
    public function update(Request $request, $id){
        $registro_viaje = Registro_viaje::find($id)->update($request->all());
        return redirect()->route('registro_viajes');
    }
}
