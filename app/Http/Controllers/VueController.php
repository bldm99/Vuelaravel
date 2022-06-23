<?php

namespace App\Http\Controllers;

use App\Models\Vue;
use http\Client\Response;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;  //desencriptar password

class VueController extends Controller
{

    public function index()
    {
        return view('vuetify');
    }

    public function cuerpo()
    {
        return view('estructura');
    }

    public function usuarios()
    {
        $ver = User::all();
        return $ver;
    }


    public function datos(Request $request)
    {
        /*$pa = 'bl@gmail.com';
        $datos =[];

        $bus =User::where ('email', $pa)->pluck('password')->first();
        #return $bus;
        $cadenaDesencriptada = Crypt::decryptString('$bus');
        $c = Crypt::encryptString('12345678');
        return  $c;*/


        #$hashed = Hash::make($request->password);
        $email=User::where('email',$request->email)->first();
        #$pas=User::where('password',$request->password)->first();



        if( Hash::check($request->password,$email->password ) ){
            return Response([
                'mensaje' => 'Correcto'
            ]);
        }
        else{
            return Response([
                'mensaje' => 'inco'
            ]);
        }
        /*if( $pas ){
            return Response([
                'mensaje' => 'Correcto'
            ]);
        }
        else{
            return Response([
                'mensaje' => 'inco'
            ]);
        }*/



        #return $request->usuario;
        #->where('password',$request->password)->first();*/

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Vue $vue)
    {
        //
    }


    public function edit(Vue $vue)
    {
        //
    }


    public function update(Request $request, Vue $vue)
    {
        //
    }


    public function destroy(Vue $vue)
    {
        //
    }
}
