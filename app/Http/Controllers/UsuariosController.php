<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios= Usuario::all();
        return view('usuario.index', compact('usuarios'));
    }
    public function create(){
        return view('usuario.create');
    }
    public function store(Request $request){
        Usuario::create($request->all());
        return redirect()->route('usuarios');
    }
    public function delete($id){
        Usuario::find($id)->delete();
        return redirect()->route('usuarios');
    }
    public function show($id){
        $usuario=Usuario::find($id);
        return view('usuario.show', compact('usuario'));
    }
    public function edit($id){
        $usuario=Usuario::find($id);
        return view('usuario.edit', compact('usuario'));
    }
    public function update(Request $request, $id){
        $usuarios=Usuario::find($id)->update($request->all());
        return redirect()->route('usuarios');
    }
}
