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
    <!--
    <link rel="stylesheet" href="{{ asset('css/st.css')}}?v=<?php echo time(); ?>" >
    -->


</head>
<body>
<h1>Vista Ariculo</h1>

<div class="table table-responsibe">



    <div class="card">
        <h5 class="card-header">Articulo</h5>
        <div class="card-body">
            <p>
                <a href="{{route('articulos.createar')}}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar nuevo Articulo
                </a>
                <a href="/descargarExcel" type="button" class="btn btn-success">Descargar Reporte Excel</a>
                <a href="/descargarPdf" type="button" class="btn btn-danger">Descargar Reporte PDF</a>


            </p>
            <p class="card-text">

            <div class="table table-responsive">

                <table class="table table-sm table-bordered">
                    <thead>

                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Categoria Id</th>
                    <th>Descripcion</th>


                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>

                    <tbody>
                    @foreach($listar as $item1)


                        <tr>
                            <td>{{ $item1->_id}}</td>
                            <td>{{ $item1->nombre}}</td>
                            <td>{{ $item1->categorias->nombre}}</td>
                            <td>{{ $item1->descripcion}}</td>




                            <td><a href="#" class="btn btn-warning" >Editar</a></td>

                            <td>
                                <form action="{{route('articulos.destroyar', $item1->id)}}" method="Post" >
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

            </p>

        </div>
    </div>

</div>
@guest
    @if (Route::has('login'))
        <p>No disponible id</p>
    @endif
    @if (Route::has('register'))
        <p>No disponible id</p>
    @endif

@else
    <h2>{{ Auth::user()->id }}</h2>
@endguest

@foreach($listar as $item1)

    <img src="{{$item1->imagen}}" width="10%">

@endforeach



</body>
</html>
@endsection
