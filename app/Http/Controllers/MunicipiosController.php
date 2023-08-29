<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Municipio;

use function GuzzleHttp\Promise\all;

class MunicipiosController extends Controller
{
    public function index(){
        $municipios= Municipio::all();
        return view('municipios.index', compact('municipios'));
    }
    public function create(){
        return view('municipios.create');
    }
    public function store(Request $request){
        Municipio::create($request->all());
        return redirect()->route('municipios');
    }
    public function delete($id){
        Municipio::find($id)->delete();
        return redirect()->route('municipios');
    }
    public function show($id){
        $municipios=Municipio::find($id);
        return view('municipios.show', compact('municipios'));
    }
    public function edit($id){
        $municipios=Municipio::find($id);
        return view('municipios.edit', compact('municipios'));
    }
    public function update(Request $request, $id){
        $municipios=Municipio::find($id)->update($request->all());
    }
}
