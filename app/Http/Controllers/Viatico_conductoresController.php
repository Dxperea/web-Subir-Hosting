<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Viaticos_Conductor;

class Viatico_conductoresController extends Controller
{
    public function index(){
        $viatico_conductores= Viaticos_Conductor::all();
        return view('viatico_conductor.index', compact('viatico_conductores'));
    }
    public function create(){
        return view('viatico_conductor.create');
    }
    public function store(Request $request){
        Viaticos_Conductor::create($request->all());
        return redirect()->route('viatico_conductores');
    }
    public function delete($id){
        Viaticos_Conductor::find($id)->delete();
        return redirect()->route('viatico_conductores');
    }
    public function show($id){
        $viatico_conductor=Viaticos_Conductor::find($id);
        return view('viatico_conductor.show', compact('viatico_conductor'));
    }
    public function edit($id){
        $viatico_conductor=Viaticos_Conductor::find($id);
        return view('viatico_conductor.edit', compact('viatico_conductor'));
    }
    public function update(Request $request, $id){
        $viatico_conductores=Viaticos_Conductor::find($id)->update($request->all());
    }
}
