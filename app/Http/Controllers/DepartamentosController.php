<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentosController extends Controller
{
    //Para visualizar los ya agragados a la base de datos
    public function index(){
        $departamentos=Departamento::all();
        return view('departamento.index', compact('departamentos'));
    }
    //Para crear o agregar
    public function create(){
        return view('departamentos.create');
    }
    public function store(Request $request){
        Departamento::create($request->all());
        return redirect()->route('departamentos');
    }
    //Para borrar o eleminar
    public function delete($id){
        Departamento::find($id)->delete();
        return redirect()->route('departamentos');
    } 
    //Para mostrar mas detalles
    public function show($id){
        $departamento = Departamento::find($id);
        return view('departamentos.show', compact('departamento'));
    }
    //Para editar y actualizar
    public function edit($id){
        $departamento = Departamento::find($id);
        return view('departamentos.edit', compact('departamento'));
    }
    public function update(Request $request, $id){
        $departamento = Departamento::find($id)->update($request->all());
        return redirect()->route('departamentos');
    }

}
