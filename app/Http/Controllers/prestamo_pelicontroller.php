<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo_pelis;

class prestamo_pelicontroller extends Controller
{
    
    public function index()
    {
         $prestamo_pelis = prestamo_pelis::
         join('peliculas','prestamo_pelis.id_peliculas','=','peliculas.id')
         ->join('clientes','prestamo_pelis.id_clientes','=','clientes.id')
         ->select('peliculas.name as nombreP','prestamo_pelis.fecha')
         ->orderBy('peliculas.name','asc')
        
       ->get();
       return[
           'prestamo_pelis'=>$prestamo_pelis
       ];
    }

    public function create()
    {
        //
    }

      public function store(Request $request)
    {
        {
        $prestamo_pelis =new prestamo_pelis();
        $prestamo_pelis->fecha = $request->fecha;
        $prestamo_pelis->fecha_devol = $request->fecha_devol;
        $prestamo_pelis->estado = $request->estado;
        $prestamo_pelis->id_peliculas = $request->id_peliculas;
        $prestamo_pelis->id_clientes = $request->id_clientes;
        $prestamo_pelis->save();
    }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
         $prestamo_pelis = prestamo_pelis::findOrFail($request->id);
         $prestamo_pelis->fecha = $request->fecha;
        $prestamo_pelis->fecha_devol = $request->fecha_devol;
        $prestamo_pelis->estado = $request->estado;
        $prestamo_pelis->id_peliculas = $request->id_peliculas;
        $prestamo_pelis->id_clientes = $request->id_clientes;
        $prestamo_pelis->save();
    }

    public function destroy($id)
    {
         $prestamo_pelis=prestamo_pelis::findOrFail($request->id);
        $prestamo_pelis->delete();
    }
}
