<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Articulo;

use App\Categoria;

class ArticuloController extends Controller
{
    public function articulos()
    {
        $articulos = Articulo::all();
        $catergorias = Categoria::all();
        return view('articulos',['articulos'=>$articulos,'categorias'=>$catergorias]);         
    }
    public function guardar(Request $request)
    {
        $validatedData = $request->validate([
            
            'codigo' => 'required',
            'nombre' => 'required',
            'stock'  => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'estado' => 'required'
        ]);
        
        $articulo = new Articulo();

        $articulo->idcategoria = $request->categoria;
        $articulo->codigo = $request->codigo;
        $articulo->nombre = $request->nombre;
        $articulo->stock  = $request->stock;
        $articulo->descripcion = $request->descripcion;
        $articulo->estado = $request->estado;
        //$articulo->imagen = $request->imagen;

        //obtenemos el campo file definido en el formulario
        $file = $request->file('imagen');
        //obtenemos el nombre del archivo
        $articulo->imagen = rand().$file->getClientOriginalName();
     
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('Fotos')->put($articulo->imagen,  \File::get($file));

        $articulo->save();

        return redirect()->back(); 
    } 
}
