<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipo_Carga;

class Tipo_cargasController extends Controller
{
    public function index(){
        $tipo_carga=Tipo_Carga::all();
        return view('tipo_carga.index', compact('tipo_carga'));
    }
    public function create(){
        return view('tipo_cargas.create');
    }
    public function store(Request $request){
        Tipo_Carga::create($request->all());
        return redirect()->route('tipo_carga');
    }
    public function delete($id){
        Tipo_Carga::find($id)->delete();
        return redirect()->route('tipo_carga');
    } 
    public function show($id){
        $tipo_carga = Tipo_Carga::find($id);
        return view('tipo_cargas.show', compact('tipo_carga'));
    }
    public function edit($id){
        $tipo_carga = Tipo_Carga::find($id);
        return view('tipo_carga.edit', compact('tipo_cargas'));
    }
    public function update(Request $request, $id){
        $tipo_carga = Tipo_Carga::find($id)->update($request->all());
        return redirect()->route('tipo_cargas');
    }
}
