@extends('layouts/plantilla')

@section('tituloPagina', 'Registrando')

@section('contenido')


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>


    <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="container">
        <h4>registrar</h4>
        <div class="row">
            <div class="col -xl-12">


                <form method="post" action="{{url('add')}} " enctype="multipart/form-data">


                @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" name="apellido">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <input type="text" class="form-control" name="sexo">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" name="edad">
                    </div>
                    <div class="form-group">
                        <label for="foto">Imagen</label>
                        <input type="file" class="form-control" name="imagen">
                    </div>
                    <div class="form-group">

                        <button type="submit" class="btn btn-success">Submit</button>

                    </div>
            </div>

        </div>

    </div>
    <a href="{{route('prueva.listarprueva')}}"> Lista usuarios</a>





</body>
</html>




@endsection
