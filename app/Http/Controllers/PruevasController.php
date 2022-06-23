<?php

namespace App\Http\Controllers;

use App\Models\Pruevas;
Use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Fotos;
use App\Models\Productos;



class PruevasController extends Controller
{

    public function index()
    {
        //
    }

    public function listarprueva()
    {
        $pru= Pruevas::all();
        $prus= User::all();
        $fot= Fotos::all();
        $prod = Productos::all();
        return view('vistaprueva',compact('pru','prus','fot'));


    }






    public function lifyy()
    {
        $pru2= Pruevas::all();

        return view('resgistrar');


    }




    public function create()
    {
        return view('resgistrar');
    }


    public function store(Request $request)
    {
        $pruevas = new Pruevas();
        $pruevas->nombre = $request->get('nombre');
        $pruevas->apellido = $request->get('apellido');
        $pruevas->sexo = $request->get('sexo');
        $pruevas->edad = $request->get('edad');

        $t='erererer';
        $pruevas->z = $t;



        $nomb = $_FILES['imagen']['name'];           # nombre de la foto ejm imganimal1.jpg
        $temporal = $_FILES['imagen']['tmp_name'];   # agrega la foto en un lugar temporal
        $carpeta = 'images/personas/';              # lugar donde se alcenara la foto

        $ruta = $carpeta.'/'.$nomb;                  # nobre guardado en la bd ejm

        move_uploaded_file($temporal,$carpeta.'/'.$nomb); #movemos a nuestra carpeta destino

        $pruevas->imagen= $ruta;   #le pasmos la ruta al para que sea agregada ala db en el campo imagen



        $pruevas->save();
        return redirect('create')->with('success', 'Pruevas has been successfully added');


    }


    public function show(Pruevas $pruevas)
    {
        //
    }


    public function editar( $id)
    {
        $pru = Pruevas::find($id);
        return view('actualizar', compact('pru'));
    }


    public function update(Request $request, $id)
    {
        $pru= Pruevas::find($id);
        $pru->nombre = $request->get('nombre');
        $pru->apellido = $request->get('apellido');
        $pru->sexo= $request->get('sexo');
        $pru->edad= $request->get('edad');
        $pru->save();

        return redirect()->route('prueva.listarprueva')->with('success','Car has been  deleted');
    }


    public function destroy($id)
    {


        $pru = Pruevas::find($id);
        $pru->delete();
        return redirect()->route('prueva.listarprueva')->with('success','Car has been  deleted');
    }
}
