<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index()
    {
        //
    }

    public function vistarproducto()
    {
        $fo = Productos::where('numero','=', 4)->get();
        #$fo = Fotos::all();  #antes


        return view('boot',compact('fo'));
        #return view('subirfoto',compact('fo'));
    }

    public function registro()
    {

        return view("regis_producto");
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $producto = new Productos();
        $producto->nombre = $request->get('nombre');
        $producto->categoria = $request->get('categoria');
        $producto->descripcion = $request->get('descripcion');
        $producto->precio = $request->get('precio');
        $producto->stock  = $request->get('stock') +1;
        $producto->oferta = $request->get('oferta');
        $producto->fech_vnc = $request->get('fecha_vnc');

        $nomb = $_FILES['imagen']['name'];           # nombre de la foto ejm imganimal1.jpg
        $temporal = $_FILES['imagen']['tmp_name'];   # agrega la foto en un lugar temporal
        $carpeta = 'images/productos/';              # lugar donde se alcenara la foto

        $ruta = $carpeta.'/'.$nomb;                  # nobre guardado en la bd ejm

        move_uploaded_file($temporal,$carpeta.'/'.$nomb); #movemos a nuestra carpeta destino

        $producto->imagen= $ruta;   #le pasmos la ruta al para que sea agregada ala db en el campo imagen


        $producto->save();
        return redirect('registro')->with('success', 'Pruevas has been successfully added');
    }


    public function show(Productos $productos)
    {
        //
    }


    public function edit(Productos $productos)
    {
        //
    }


    public function update(Request $request, Productos $productos)
    {
        //
    }


    public function destroy(Productos $productos)
    {
        //
    }
}
