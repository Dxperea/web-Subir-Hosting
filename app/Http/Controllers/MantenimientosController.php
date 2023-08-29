<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mantenimiento;   
class MantenimientosController extends Controller
{
    public function index(){
        $mantenimientos=Mantenimiento::all();
        return view('mantenimiento.index', compact('mantenimientos'));   
    }
    public function create (){
        return view('mantenimiento.create'); 
    }
    public function store (Request $request){
        Mantenimiento:: create($request->all());
        return redirect()->route('mantenimientos');
    }
    public function delete($id){
        Mantenimiento::find($id)->delete();
        return redirect()->route('mantenimientos');
    }
    public function show($id){
        $mantenimiento = Mantenimiento::find($id);
        return view('mantenimiento.show', compact('mantenimiento'));
    }
    public function edit($id){
        $mantenimiento = Mantenimiento::find($id);
        return view('mantenimiento.edit', compact('mantenimiento'));
    }
    public function update(Request $request, $id){
        $mantenimientos = Mantenimiento::find($id)->update($request->all());
        return redirect()->route('mantenimientos');
    }
}
