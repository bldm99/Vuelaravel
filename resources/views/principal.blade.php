
@extends('layouts/plantilla')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="{{ asset('css/st.css')}}?v=<?php echo time(); ?>" >

    <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>

    <py-script>

        x=[1,2,3,4,5,6,7,8,9,10]
        if 2 in x:
            for recorre in x:
                print(recorre)

    </py-script>
    <py-script output="lineplot" src="codigo.py" >
     import codigo

    </py-script>|



</head>
<body>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="">Pagina Web</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} </a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>


<div class="table table-responsibe">

    <h1> PAGINA PRINCIPAL </h1>
    <br>
    <div class="medio">
        <table>
            <thead>
                <th>Name</th>
                <th>Email</th>
            </thead>

            <tbody>
            @foreach($prueva as $item1)
                <tr>
                    <td>{{ $item1->name }}</td>
                    <td>{{ $item1->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="lugares">
        @foreach($prueva as $itemy)
            <h2>{{ $itemy->email }}</h2>
        @endforeach
    </div>




    <a href="{{route('prueva.listarprueva')}}"> Lista usuarios</a>
    <br>
    <a href="{{route('fotos.vistafoto')}}"> subir fotos</a>
    <br>
    <a href="{{route('productos.vistarproducto')}}"> Ver pagina ventas</a>
    <br>
    <a href="{{route('categorias.hcat')}}"> Categorias</a>
    <br>
    <a href="{{route('articulos.harti')}}"> Articulos</a>
    <br>
    <a href="/hojarticulo" type="button" class="btn btn-danger">Acceso 2 Articulos</a>
    <br>
    <br>
    <a href="/" type="button" class="btn btn-danger">Pagina inicial Tienda</a>





    @guest
        @if (Route::has('login') )
            <p>No puedes comprar</p>
            <a href="{{route('register')}}" class="btn btn-warning">Comprar</a>
        @endif

    @else
        <p>comprar ya </p>
        <a href="{{route('prueva.listarprueva')}}" class="btn btn-warning">Comprar</a>

    @endguest




    <div>

    </div>


    @foreach($pro as $itemy)
        <h2>{{ $itemy->nombre }}</h2>
    @endforeach







    @guest
        @if (Route::has('login'))
            <p>No disponible id</p>
            <p  style="display:none">{{ $x='noyal' }}</p>
            <p>{{ $x }}</p>



        @endif
        @if (Route::has('register'))
            <p>No disponible id</p>
        @endif

    @else
        <h2>{{ Auth::user()->id }}</h2>
    @endguest



</div>




</body>
</html>
@endsection
