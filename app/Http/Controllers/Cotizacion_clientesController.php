<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cotizacion_cliente;

class Cotizacion_clientesController extends Controller
{
    public function index(){
        $cotizacion_clientes=Cotizacion_cliente::all();
        return view('cotizacion_cliente.index', compact('cotizacion_clientes'));   
    }
    public function create (){
        return view('cotizacion_cliente.create'); 
    }
    public function store (Request $request){
        Cotizacion_cliente:: create($request->all());
        return redirect()->route('cotizacion_clientes');
    }
    public function delete($id){
        Cotizacion_cliente::find($id)->delete();
        return redirect()->route('cotizacion_clientes');
    }
    public function show($id){
        $cotizacion_cliente = Cotizacion_cliente::find($id);
        return view('cotizacion_cliente.show', compact('cotizacion_cliente'));
    }
    public function edit($id){
        $cotizacion_cliente = Cotizacion_cliente::find($id);
        return view('cotizacion_cliente.edit', compact('cotizacion_cliente'));
    }
    public function update(Request $request, $id){
        $cotizacion_clientes = Cotizacion_cliente::find($id)->update($request->all());
        return redirect()->route('cotizacion_clientes');
    }
}
