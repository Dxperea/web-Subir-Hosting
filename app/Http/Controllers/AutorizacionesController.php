<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autorizacion;

class AutorizacionesController extends Controller
{
    public function index(){
        $autorizaciones=Autorizacion::all();
        return view('autorizaciones.index', compact('autorizaciones'));   
    }
    public function create (){
        return view('autorizaciones.create'); 
    }
    public function store (Request $request){
        Autorizacion:: create($request->all());
        return redirect()->route('autorizaciones');
    }
    public function delete($id){
        Autorizacion::find($id)->delete();
        return redirect()->route('autorizaciones');
    }
    public function show($id){
        $autorizacion = Autorizacion::find($id);
        return view('autorizaciones.show', compact('autorizacion'));
    }
    public function edit($id){
        $autorizacion = Autorizacion::find($id);
        return view('autorizaciones.edit', compact('autorizacion'));
    }
    public function update(Request $request, $id){
        $autorizacion = Autorizacion::find($id)->update($request->all());
        return redirect()->route('autorizaciones');
    }
}
