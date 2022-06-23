<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use App\Models\Articulos;

class CarritoController extends Controller
{

    public function index()
    {
        //
    }

    public function hcarrito($id)
    {

        #$y = '629c039726570000ef0036f9';
        $liscarrito= Carrito::with('articulos','usuarios')->where('usuario_id', $id )->get();
        #dd($liscarrito);
        return view('aviato.cart')->with('liscarrito',$liscarrito); #carpeta/nombreb lade;
    }


    public function create()
    {
        //
    }

    public function busquedacar()
    {

        $prueva = $_POST['usuario'];
        return $prueva;


    }


    public function storecar(Request $request)
    {
        $carrito= new Carrito();

        $carrito->articulo_id= $request->get('articulo_id');
        $carrito->usuario_id= $request->get('usuario_id');

        $carrito->save();
        return redirect('/')->with('success', 'Pruevas has been successfully added');

    }


    public function show(Carrito $carrito)
    {
        //
    }


    public function edit(Carrito $carrito)
    {
        //
    }


    public function update(Request $request, Carrito $carrito)
    {
        //
    }


    public function destruir($id)
    {

        $var= $_POST['usuario'];


        #$lis= Carrito::with('articulos','usuarios')->where('usuario_id', $id )->get();
        $cat = Carrito::find($id);
        $cat->delete();
        #return redirect()->route('categorias.hcat')->with('success','Car has been  deleted'); #retorno no reomendable
        $ui='629c0ba726570000ef0036fc';
        $r='/hojacarrito/';
        #$salida=$r .$ui;
        #$salida=$r .$lis;
        $salida=$r .$var;

        return redirect($salida)->with('success', 'Pruevas has been successfully added'); #retorno recomendable
    }
}
