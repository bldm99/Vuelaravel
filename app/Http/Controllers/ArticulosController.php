<?php

namespace App\Http\Controllers;

use App\Exports\ArticulosExport;
use App\Models\Articulos;
use Illuminate\Http\Request;
use App\Models\Categorias;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


class ArticulosController extends Controller
{

    public function index()
    {
        //
    }
    public function tiendahome()
    {
        $listar= Articulos::with('categorias')->get();

        return view('aviato.index')->with('listar',$listar); #carpeta/nombreb lade;
    }



    public function harti()
    {
        $listar= Articulos::with('categorias')->get();
        #dd($listar);
        return view('articulo.vistarti')->with('listar',$listar); #carpeta/nombreb lade
    }

    public function vueharti()
    {
        $listar= Articulos::all();

        return $listar; #carpeta/nombreb lade
    }



    public function createar()
    {
        #return view('articulo.artiregis'); #carpeta/nombreb lade
        #$obtencion = Categorias::all();
        #return view('articulo.artiregis',compact('obtencion'))->with('categorias',$obtencion);
        $obtencion= Categorias::all();
        return view('articulo.artiregis',compact('obtencion'));
    }

    public function busqueda()
    {

        $x='ropa';
        $y='Celulares';

        #$bus = Categorias::where('nombre','=', $y)->get(['nombre','_id']);
        $bus[] =Categorias::select ('id')->where ('nombre', $y)->get ();
        #echo $bus;
        $get = 'ropa';

        $ropa ='629e9e49d8a4aa6201cf4b15';
        $Celulares ='629eaf94ba5c0000b2003c8b';
        $Bedidas ='62a2575be657000057001edc';

        if ($get== 'ropa'){
            echo $ropa;

        }


    }


    public function storear(Request $request)
    {

        $ropa ='629e9e49d8a4aa6201cf4b15';
        $Celulares ='629eaf94ba5c0000b2003c8b';
        $Bebidas ='62a2575be657000057001edc';
        $Muebles ='62a25bffe657000057001ee1';


        $arti= new Articulos();
        $arti->nombre = $request->get('nombre');

        /*$cate = $_POST['cate'];
        if ($cate== 'Ropa'){
            $arti->categoria_id =$ropa;
        }elseif ($cate == 'Celular'){
            $arti->categoria_id =$Celulares;
        }elseif ($cate == 'Bebidas'){
            $arti->categoria_id =$Bebidas;
        }elseif ($cate == 'Muebles'){
            $arti->categoria_id =$Muebles;
        }else $arti->categoria_id ='otros';*/


        $arti->categoria_id =$request->get('cate');


        $arti->descripcion = $request->get('descripcion');
        $arti->precio = $request->get('precio');
        $arti->stock = $request->get('stock');
        $arti->oferta = $request->get('oferta');
        $arti->fecha_vnc = $request->get('fecha_vnc');

        $nomb = $_FILES['imagen']['name'];           # nombre de la foto ejm imganimal1.jpg
        $temporal = $_FILES['imagen']['tmp_name'];   # agrega la foto en un lugar temporal
        $carpeta = 'images/ropa/';              # lugar donde se alcenara la foto

        $ruta = $carpeta.'/'.$nomb;                  # nobre guardado en la bd ejm

        move_uploaded_file($temporal,$carpeta.'/'.$nomb); #movemos a nuestra carpeta destino

        $arti->imagen= $ruta;   #le pasmos la ruta al para que sea agregada ala db en el campo imagen



        $arti->save();

        return redirect('/hojarticulo')->with('success', 'Pruevas has been successfully added');

    }


    public function show(Articulos $articulos)
    {
        //
    }


    public function edit(Articulos $articulos)
    {
        //
    }


    public function update(Request $request, Articulos $articulos)
    {
        //
    }


    public function destroyar($id)
    {
        $cat = Articulos::find($id);
        $cat->delete();
        #return redirect()->route('categorias.hcat')->with('success','Car has been  deleted'); #retorno no reomendable
        return redirect('/hojarticulo')->with('success', 'Pruevas has been successfully added'); #retorno recomendable
    }

    public function exportExcel()
    {
        return Excel::download(new ArticulosExport, 'articulos.xlsx');
    }

    public function exportPdf()
    {
        $articulos = Articulos::all();
        $pdf = PDF::loadView('pdf.articulos', [
            'articulos' => $articulos
        ]);
        return $pdf->download('articulos.pdf');
    }


}
