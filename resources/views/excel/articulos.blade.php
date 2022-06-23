
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Oferta</th>
        <th>Fecha_vnc</th>

    </tr>
    </thead>
    <tbody>
    @foreach($articulos as $art)
        <tr>
            <td>{{ $art->id }}</td>
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
