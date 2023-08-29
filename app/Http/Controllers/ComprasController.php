<?php

namespace App\Http\Controllers;
use App\Models\Compra;
use Illuminate\Http\Request;

class ComprasController extends Controller
{   
    //Para visualizar los ya agragados a la base de datos
    public function index(){
        $compra=Compra::all();
        return view('compras.index', compact('compras'));
    }
    //Para crear o agregar
    public function create(){
        return view('compras.create');
    }
    public function store(Request $request){
        Compra::create($request->all());
        return redirect()->route('compras');
    }
    //Para borrar o eleminar
    public function delete($id){
        Compra::find($id)->delete();
        return redirect()->route('compras');
    } 
    //Para mostrar mas detalles
    public function show($id){
        $compra = Compra::find($id);
        return view('compras.show', compact('compra'));
    }
    //Para editar y actualizar
    public function edit($id){
        $compra = Compra::find($id);
        return view('compras.edit', compact('compra'));
    }
    public function update(Request $request, $id){
        $compra = Compra::find($id)->update($request->all());
        return redirect()->route('compra');
    }
}