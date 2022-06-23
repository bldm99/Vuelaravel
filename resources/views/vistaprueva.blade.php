
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
    <h1>Vista prueva</h1>

    <div class="table table-responsibe">

        <table class="ce">
            <thead>


            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Edad</th>



            </thead>

            <tbody>
            @foreach($pru as $item1)


                <tr>


                    <td>{{ $item1->nombre }}</td>
                    <td>{{ $item1->apellido }}</td>
                    <td>{{ $item1->sexo }}</td>
                    <td>{{ $item1->edad }}</td>
                    <td>
                        <img src="{{$item1->imagen}}" width="10%" >
                    </td>




                </tr>
            @endforeach
            </tbody>
        </table>
        <br>


        <table>
            <thead>


            <th>Name</th>
            <th>Email</th>



            </thead>

            <tbody>
            @foreach($prus as $item1)

                <tr>


                    <td>{{ $item1->name }}</td>
                    <td>{{ $item1->email }}</td>




                </tr>
            @endforeach
            </tbody>
        </table>
        <br>

        <div class="card">
            <h5 class="card-header">Usuarios</h5>
            <div class="card-body">
                <h5 class="card-title">Lista de usuarios</h5>
                <p>
                    <a href="{{route('prueva.create')}}" class="btn btn-primary">
                        <span class="fas fa-user-plus"></span> Agregar nuevo usuario
                    </a>
                </p>
                <p class="card-text">

                    <div class="table table-responsive">

                        <table class="table table-sm table-bordered">
                            <thead>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th>Foto</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </thead>

                            <tbody>
                            @foreach($pru as $item1)

                                <tr>
                                    <td>{{ $item1->nombre }}</td>
                                    <td>{{ $item1->apellido }}</td>
                                    <td>{{ $item1->sexo }}</td>
                                    <td>{{ $item1->edad }}</td>
                                    <td>
                                        <img src="{{$item1->imagen}}" width="10%" >
                                    </td>

                                    <td><a href="{{route('prueva.editar',$item1->id)}}" class="btn btn-warning" >Editar</a></td>

                                    <td>
                                        <form action="{{route('prueva.destroy', $item1->id)}}" method="Post" >
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
    @foreach($fot as $item1)

        <img src="{{$item1->imagen}}" width="10%">

    @endforeach




</body>
</html>
@endsection
