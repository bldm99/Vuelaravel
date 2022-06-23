


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
    <h1>Vista Categoria</h1>

    <div class="table table-responsibe">



        <div class="card">
            <h5 class="card-header">Categorias</h5>
            <div class="card-body">

                <p>
                    <a href="{{route('categorias.createc')}}" class="btn btn-primary">
                        <span class="fas fa-user-plus"></span> Agregar nueva Categoria
                    </a>
                </p>
                <p class="card-text">

                <div class="table table-responsive">

                    <table class="table table-sm table-bordered">
                        <thead>

                        <th>Id</th>
                        <th>Nombre</th>

                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>

                        <tbody>
                        @foreach($listar as $item1)


                            <tr>
                                <td>{{ $item1->_id}}</td>
                                <td>{{ $item1->nombre}}</td>



                                <td><a href="{{route('categorias.editarcat',$item1->id)}}" class="btn btn-warning" >Editar</a></td>

                                <td>
                                    <form action="{{route('categorias.destroyc', $item1->id)}}" method="Post" >
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





</body>
</html>
@endsection

