<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
</head>
<body>
    <h1>Detalles del Producto</h1>
    <table>
        <tr>
            <th>ID:</th>
            <td>{{ $producto->id }}</td>
        </tr>
        <tr>
            <th>Nombre:</th>
            <td>{{ $producto->nombre }}</td>
        </tr>
        <tr>
            <th>Referencia:</th>
            <td>{{ $producto->referencia }}</td>
        </tr>
        <tr>
            <th>Precio:</th>
            <td>{{ $producto->precio }}</td>
        </tr>
        <tr>
            <th>Peso:</th>
            <td>{{ $producto->peso }}</td>
        </tr>
        <tr>
            <th>Categoría:</th>
            <td>{{ $producto->categoria }}</td>
        </tr>
        <tr>
            <th>Stock:</th>
            <td>{{ $producto->stock }}</td>
        </tr>
    </table>
    <a href="{{ route('productos.index') }}">Volver a la lista de productos</a>
</body>
</html>
