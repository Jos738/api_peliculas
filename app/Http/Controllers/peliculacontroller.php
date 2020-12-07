<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peliculas;

class peliculacontroller extends Controller
{
    public function index()
    {
       $peliculas = Peliculas::join('categorias','peliculas.id_categorias','categorias.id')
       ->select('categorias.name as nomCat','peliculas.name','puntuacion')
       ->orderBy('peliculas.name','asc')
       ->get();
       return[
           'peliculas'=>$peliculas
       ];
    }
   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $peliculas =new peliculas();
        $peliculas->name = $request->name;
        $peliculas->puntuacion = $request->puntuacion;
        $peliculas->precio = $request->precio;
        $peliculas->id_categorias = $request->id_categorias;
        $peliculas->save();
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
       $peliculas = peliculas::findOrFail($request->id);
       $peliculas->name = $request->name;
        $peliculas->puntuacion = $request->puntuacion;
        $peliculas->precio = $request->precio;
        $peliculas->id_categorias = $request->id_categorias;
       $peliculas->save();

    }

   public function destroy(Request $request)
    {
          $peliculas=peliculas::findOrFail($request->id);
        $peliculas->delete();
    }
}
