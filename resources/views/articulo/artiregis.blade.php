
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
        <h4>Registrar Articulo </h4>
        <div class="row">
            <div class="col -xl-12">


                <form method="post" action="{{url('addarticulo')}} " enctype="multipart/form-data">


                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Default select example" name="cate">

                            <option selected>Seleccione su categoria</option>
                            @foreach($obtencion as $item1)
                                <option value="{{$item1->_id}}" >{{$item1->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    @guest
                        @if (Route::has('login'))
                            <p>No disponible id</p>
                            <p  style="display:none">{{ $x='noyal' }}</p>
                        @endif
                        @if (Route::has('register'))
                            <p  style="display:none">{{ $x='noyal' }}</p>
                        @endif

                    @else
                        <div class="form-group" style="display:none">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" value="{{ Auth::user()->id }}">
                        </div>
                    @endguest




                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" name="stock" required>
                    </div>
                    <div class="form-group">
                        <label for="oferta">Oferta</label>
                        <input type="text" class="form-control" name="oferta" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_vnc">Fecha_vnc</label>
                        <input type="date" class="form-control" name="fecha_vnc">
                    </div>

                    <div class="form-group">
                        <label for="foto">Imagen</label>
                        <input type="file" class="form-control" name="imagen" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <a href="{{route('articulos.harti')}}"> Lista de Articulos</a>







</body>
</html>




@endsection
