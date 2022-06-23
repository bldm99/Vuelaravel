

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h4>registrar</h4>
    <div class="row">
        <div class="col -xl-12">


            <form method="post" action="{{url('addfoto')}}" enctype="multipart/form-data">
            @csrf

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" name="imagen" required>
                </div>


                    <button type="submit" class="btn btn-success">Submit</button>

                </div>
        </div>

    </div>

</div>
@foreach($fo as $item1)

    <img src="{{$item1->imagen}}" width="50%">

@endforeach







<br>



</body>
</html>
