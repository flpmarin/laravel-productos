<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/create">agregar productos</a>

    <h1>Productos:</h1>
    <ul>
        @forelse ($products as $product)
            <li>
                Nombre: {{ $product->name }}<br>
                Descripción: {{ $product->description }}<br>
                Precio: {{ $product->price }}

                <form action="{{ route ('product.destroy', $product->id)}}" method="post">
                    @method("DELETE")
                    @csrf
                    <input type="submit" value="🗑️" />
                </form>
            </li>
        @empty
        <li>No data</li>
        @endforelse
    </ul>
</body>
</html>