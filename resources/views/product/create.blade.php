<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create product</title>
</head>
<body>
    <a href={{ route('product.index')}}>volver</a>
    <h1>agregar productos</h1>
    <form action="{{ route('product.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name"/>
        <input type="text" name="description" placeholder="description"/>
        <input type="number" name="price" placeholder="price"/>     
        <input type="submit" value="agregar producto" /> 
    </form>
</body>
</html>