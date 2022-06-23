
<!DOCTYPE html>
<html>
<head>
    <title>ARTICULOS</title>
</head>
<body>

<table>
    <thead>

    <th>NOMBRE</th>
    <th>CATEGORIA</th>
    <th>DESCRIPCION</th>
    <th>PRECIO</th>
    <th>STOCK</th>
    <th>OFERTA</th>
    <th>FECHA_VNC</th>
    </thead>
    <tbody>
    @foreach($articulos as $art)
        <tr>

            <td>{{ $art->nombre }}</td>
            <td>{{ $art->categorias->nombre}}</td>
            <td>{{ $art->descripcion}}</td>
            <td>{{ $art->precio }}</td>
            <td>{{ $art->stock }}</td>
            <td>{{ $art->oferta}}</td>
            <td>{{ $art->fecha_vnc }}</td>

        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
