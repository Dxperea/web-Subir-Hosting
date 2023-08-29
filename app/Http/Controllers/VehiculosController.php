<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculosController extends Controller
{
    public function index(){
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }
    public function create(){
        return view('vehiculos.create');
    }
    public function store(Request $request){
        Vehiculo::create($request->all());
        return redirect()->route('vehiculos');
    }
    public function delete($id){
        Vehiculo::find($id)->delete();
        return redirect()->route('vehiculos');
    }
    public function show($id){
        $vehiculos=Vehiculo::find($id);
        return view('vehiculos.show', compact('vehiculos'));
    }
    public function edit($id){
        $vehiculos=Vehiculo::find($id);
        return view('vehiculos.edit', compact('vehiculos'));
    }
    public function update(Request $request, $id){
        $vehiculos=Vehiculo::find($id)->update($request->all());
        return redirect()->route('vehiculos');
    }
}
