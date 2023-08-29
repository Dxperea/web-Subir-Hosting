<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Factura;


class FacturaController extends Controller
{
    //Para visualizar los ya agragados a la base de datos
    public function index(){
        $factura=Factura::all();
        return view('facturas.index', compact('factura'));
    }
    //Para crear o agregar
    public function create(){
        return view('facturas.create');
    }
    public function store(Request $request){
        Factura::create($request->all());
        return redirect()->route('facturas');
    }
    //Para borrar o eleminar
    public function delete($id){
        Factura::find($id)->delete();
        return redirect()->route('facturas');
    } 
    //Para mostrar mas detalles
    public function show($id){
        $factura=Factura::find($id);
        return view('facturas.show', compact('factura'));
    }
    //Para editar y actualizar
    public function edit($id){
        $factura=Factura::find($id);
        return view('facturas.edit', compact('factura'));
    }
    public function update(Request $request, $id){
        $factura=Factura::find($id)->update($request->all());
        return redirect()->route('facturas');
    }
}
