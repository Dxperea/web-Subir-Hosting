<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tipo_Carga;
use Illuminate\Http\Request;
use App\Models\Tipo_Documento;

class Tipo_documentosController extends Controller
{
    public function index(){
        $tipo_documentos=Tipo_Documento::all();
        return view('tipo_documento.index', compact('tipo_documentos'));
    }
    public function create(){
        return view('tipo_documento.create');
    }
    public function store(Request $request){
        Tipo_Documento::create($request->all());
        return redirect()->route('tipo_documentos');
    }
    public function delete($id){
        Tipo_Documento::find($id)->delete();
        return redirect()->route('tipo_documentos');
    }
    public function show($id){
        $tipo_documento=Tipo_Documento::find($id);
        return view('tipo_documento.show', compact('tipo_documento'));
    }
    public function edit($id){
        $tipo_documento=Tipo_Documento::find($id);
        return view('tipo_documento.edit', compact('tipo_documento'));
    }
    public function update(Request $request, $id){
        $tipo_documentos=Tipo_Documento::find($id)->update($request->all());
        return redirect()->route('tipo_documentos');
    }
}
