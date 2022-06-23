<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use App\Models\Fotos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ArticulosController;

class FotosController extends Controller
{

    public function index()
    {
        //
    }

    public function vistafoto()
    {
        #$fo = Fotos::where('numero','=', 4)->get();
        $fo = Fotos::all();  #antes


        #return view('boot',compact('fo'));
        return view('subirfoto',compact('fo'));
    }

    public function listarprueva()
    {
        #$fo= Fotos::find(1);
        $fo = Fotos::where('numero','<', 4)->get();



        return view('subirfoto',compact('fo'));


    }



   /* public function cargar_foto()
    {
        if(isset($_REQUEST['btn'])){

            $descripcion = $_REQUEST['nombre'];
            $nomb = $_FILES['foto']['name'];
            $temporal = $_FILES['foto']['tmp_name'];
            $carpeta = 'fotos';

            $ruta = $carpeta.'/'.$nomb;
            move_uploaded_file($temporal,$carpeta.'/'.$nomb);


        }
        return view('subirfoto');
    }*/



    public function create()
    {
        //
    }


    public function store(Request $request)
    {



        $ul = Fotos::latest()->value('numero'); #localiza el ultimo valor de ingreso del campo numero
        $manual_incrementador= $ul;             #asignamos ala varible ul el ultimo valor hallado

        $foto = new Fotos();

       /* $wew= new Articulos();
        $f=4;
        $wew->prueva=$f;*/



        $foto->nombre = $request->get('nombre'); #coge el dato del puesto en el imput nombre
        $foto->numero= $manual_incrementador +1;     #el sgte ingreso tendra un valor incrementado

        $nomb = $_FILES['imagen']['name'];           # nombre de la foto ejm imganimal1.jpg
        $temporal = $_FILES['imagen']['tmp_name'];   # agrega la foto en un lugar temporal
        $carpeta = 'images/featureds/';              # lugar donde se alcenara la foto

        $ruta = $carpeta.'/'.$nomb;                  # nobre guardado en la bd ejm

        move_uploaded_file($temporal,$carpeta.'/'.$nomb); #movemos a nuestra carpeta destino

        $foto->imagen= $ruta;   #le pasmos la ruta al para que sea agregada ala db en el campo imagen

        $foto->save();
        /*$wew->save();*/


        return redirect('vistafoto')->with('success', 'Fotos has been successfully added');
        #return $ul;
    }


    public function show(Fotos $fotos)
    {
        //
    }


    public function edit(Fotos $fotos)
    {
        //
    }


    public function update(Request $request, Fotos $fotos)
    {
        //
    }


    public function destroy(Fotos $fotos)
    {
        //
    }
}
