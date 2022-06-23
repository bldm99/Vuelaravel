<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

    public function index()
    {
        //
    }

    public function hcat()
    {
        $listar= Categorias::all();
        return view('categoria.vistacat',compact('listar')); #carpeta/nombreb lade
    }


    public function createc()
    {
        return view('categoria.catregis'); #carpeta/nombreb lade
    }


    public function storec(Request $request)
    {
        $cat= new Categorias();
        $cat->nombre = $request->get('nombre');



        $cat->save();

        return redirect('/hojacategoria')->with('success', 'Pruevas has been successfully added');

    }


    public function show(Categorias $categorias)
    {
        //
    }


    public function editarcat( $id)
    {
        $cat = Categorias::find($id);
        return view('categoria.editcat', compact('cat'));
    }

    public function updatecat(Request $request, $id)
    {
        $cat= Categorias::find($id);
        $cat->nombre = $request->get('nombre');

        $cat->save();

        return redirect()->route('categorias.hcat')->with('success','Car has been  deleted');
    }


    public function destroyc($id)
    {
        $cat = Categorias::find($id);
        $cat->delete();
        #return redirect()->route('categorias.hcat')->with('success','Car has been  deleted'); #retorno no reomendable
        return redirect('/hojacategoria')->with('success', 'Pruevas has been successfully added'); #retorno recomendable
    }
}
