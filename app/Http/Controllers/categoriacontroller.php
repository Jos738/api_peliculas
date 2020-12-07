<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
class categoriacontroller extends Controller
{ 
    public function index()
    {
        $categorias = categoria::
        orderBy('name')->paginate();
        return[
            'datos'=>$categorias
        ];
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
           $categorias =new categoria();
           $categorias->name = $request->name;
           $categorias->save();
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
       $categorias = categoria::findOrFail($request->id);
       $categorias->name = $request->name;
       $categorias->save();

    }

   public function destroy(Request $request)
    {
          $categorias=categoria::findOrFail($request->id);
        $categorias->delete();
    }
}
