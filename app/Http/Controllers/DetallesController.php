<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use App\Models\Detalles;
use Illuminate\Http\Request;

class DetallesController extends Controller
{

    public function index()
    {
        //
    }


    public function hdetalle($articulo_id)

    {

        $pru = Articulos::find($articulo_id);
        return view('aviato.checkout', compact('pru'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Detalles $detalles)
    {
        //
    }


    public function edit(Detalles $detalles)
    {
        //
    }


    public function update(Request $request, Detalles $detalles)
    {
        //
    }

    public function confirmacion()
    {

        return view('aviato.confirmation');


    }

    public function continuar()
    {
        $listar= Articulos::with('categorias')->get();

        return view('aviato.index')->with('listar',$listar); #carpeta/nombreb lade;

    }



    public function agre_actu(Request $request , $id)
    {
        $arti= Articulos::find($id);
        $actual =$arti->stock; #ejm 45
        $x=1;

        $arti->stock=$actual - $x;   #nuevo valor de stock sera 45 -1  -> 44

        $det = new Detalles();
        $det->nombre = $request->get('nombre');
        $det->apellido = $request->get('apellido');
        $det->pais = $request->get('pais');
        $det->producto = $request->get('producto');
        $det->precio = $request->get('precio');

        $arti->save();
        $det->save();

        $y='registraso';

        return redirect('/vistaconfirmado')->with('success', 'Pruevas has been successfully added');

    }






    public function destroy(Detalles $detalles)
    {
        //
    }
}
