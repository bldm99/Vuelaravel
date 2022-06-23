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
    <h4>Actualizar Categoria</h4>
    <div class="row">
        <div class="col -xl-12">


            <form method="Post" action="{{route('categorias.updatecat',$cat->id)}}">


                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required value="{{$cat->nombre}}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{route('categorias.hcat')}}" class="btn btn-warning">Volver</a>
                </div>

            </form>

        </div>
    </div>
</div>







</body>
</html>




@endsection
