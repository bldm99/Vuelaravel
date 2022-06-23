


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




    <div class="container">
        <h4>Agrgar nuevo producto</h4>
        <div class="row">
            <div class="col -xl-12">


                <form method="post" action="{{url('addpro')}} " enctype="multipart/form-data">


                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input type="text" class="form-control" name="categoria">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" name="stock">
                    </div>
                    <div class="form-group">
                        <label for="oferta">Oferta</label>
                        <input type="text" class="form-control" name="oferta">
                    </div>
                    <div class="form-group">
                        <label for="fecha_vnc">Fecha de Vencimiento</label>
                        <input type="date" class="form-control" name="fecha_vnc">
                    </div>
                    <div class="form-group">
                        <label for="foto">Imagen</label>
                        <input type="file" class="form-control" name="imagen">
                    </div>
                    <div class="form-group">

                        <button type="submit" class="btn btn-success">Registrar</button>

                    </div>
            </div>

        </div>

    </div>
    <a href="{{route('prueva.listarprueva')}}"> Lista usuarios</a>





</body>
</html>




@endsection

