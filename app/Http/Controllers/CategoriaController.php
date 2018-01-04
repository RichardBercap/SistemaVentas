<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('almacen.categoria.index',['categorias'=>Categoria::all()]);
    }
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'condicion' => 'required'
        ]);   

        $categoria= new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->condicion = $request->condicion;

        $categoria->save();

        return redirect()->back();
    }
    public function buscar(Request $request){
        $validatedData = $request->validate([
            'nombre' => 'required'
            
        ]); 

        $categorias=Categoria::where('nombre', $request['nombre'])->get();

        return view('almacen.categoria.index',['categorias'=>$categorias]);
    }
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'condicion' => 'required'
        ]);
        $c = Categoria::find($request->id);

        $c->nombre      = $request->nombre;
        $c->descripcion = $request->descripcion;
        $c->condicion   = $request->condicion;

        $c->save();

        return view('almacen.categoria.index',['categorias'=>Categoria::all()]);    
    }
    public function delete(Request $request)
    {
        $c = Categoria::find($request->id);

        $c->delete();

        return view('almacen.categoria.index',['categorias'=>Categoria::all()]); 
    }

    public function invoice() 
    {
        //$data = $this->getData();

        $categorias = Categoria::all();
        $date = date('Y-m-d');
        
        $view =  \View::make('pdf.invoice', compact( 'categorias', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }
    
}
