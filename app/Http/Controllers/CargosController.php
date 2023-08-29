<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cargo;

class CargosController extends Controller
{
    public function index(){
        $cargos = Cargo::all();
        return view('cargo.index', compact('cargos'));
    }
    public function create(){
        return view('cargo.create');
    }
    public function store(Request $request){
        Cargo::create($request->all());
        return redirect()->route('cargos');
    }
    public function delete($id){
        Cargo::find($id)->delete();
        return redirect()->route('cargos');
    } 
    public function show($id){
        $cargos = Cargo::find($id);
        return view('cargo.show', compact('cargos'));
    }
    public function edit($id){
        $cargos = Cargo::find($id);
        return view('cargo.edit', compact('cargos'));
    }
    public function update(Request $request, $id){
        $cargo = Cargo::find($id)->update($request->all());
        return redirect()->route('cargos');
    }
}
