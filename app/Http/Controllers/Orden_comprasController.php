<?php

namespace App\Http\Controllers;
use App\Models\Orden_compra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Orden_comprasController extends Controller
{
    public function index(){
        $orden_compras= Orden_compra::all();
        return view('orden_compra.index', compact('orden_compras'));
    }
    public function create(){
        return view('orden_compra.create');
    }
    public function store(Request $request){
        Orden_compra::create($request->all());
        return redirect()->route('orden_compras');
    }
    public function delete($id){
        Orden_compra::find($id)->delete();
        return redirect()->route('orden_compras');
    }
    public function show($id){
        $orden_compra=Orden_compra::find($id);
        return view('orden_compra.show', compact('orden_compra'));
    }
    public function edit($id){
        $orden_compra=Orden_compra::find($id);
        return view('orden_compra.edit', compact('orden_compra'));
    }
    public function update(Request $request, $id){
        $orden_compras=Orden_compra::find($id)->update($request->all());
    }
}
