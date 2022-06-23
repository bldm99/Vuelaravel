<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Productos;
use App\Models\Articulos;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        /*$prueva= User::all();
        $pro = Productos::all();
        return view('principal',compact('prueva','pro'));*/
        $prueva= User::all();
        $listar = Articulos::all();
        return view('aviato.index',compact('prueva','listar'));
    }

    /*public function p()
    {
        return view('principal');
    }*/
}
