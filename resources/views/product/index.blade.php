<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Productos</h3>
    <form action="{{ route('store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name"/>
        <input type="text" name="description" placeholder="description"/>
        <input type="number" name="price" placeholder="price"/>     
        <input type="submit" value="agregar producto" /> 
    </form>

    <h1>Productos:</h1>
    <ul>
        @forelse ($products as $product)
        <li>{{ $product->name }}</li>
        @empty
        <li>No data</li>
        @endforelse
    </ul>
</body>
</html>