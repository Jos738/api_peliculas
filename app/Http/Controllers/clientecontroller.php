<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;

class clientecontroller extends Controller
{
    public function index()
    {
      $clientes = clientes::select('name','apellido','cedula','direccion','telefono','email','estado')->get();
       return[
           'date'=>$clientes
       ];
    }
   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       $clientes =new clientes();
       $clientes->name = $request->name;
       $clientes->apellido = $request->apellido;
       $clientes->cedula = $request->cedula;
       $clientes->direccion = $request->direccion;
       $clientes->telefono = $request->telefono;
       $clientes->email = $request->email;
       $clientes->estado = $request->estado;
       $clientes->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

   
       public function update(Request $request)
    {
       $clientes = clientes::findOrFail($request->id);
       $clientes->name = $request->name;
        $clientes->apellido = $request->puntuacion;
        $clientes->cedula = $request->cedula;
        $clientes->direccion = $request->direccion;
        $clientes->telefono = $request->telefono;
        $clientes->email = $request->email;
        $clientes->estado = $request->estado;
        $clientes->save();

    }

   public function destroy(Request $request)
    {
          $clientes=clientes::findOrFail($request->id);
        $clientes->delete();
    }
}

