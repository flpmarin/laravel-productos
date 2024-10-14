<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit product</title>
</head>
<body>
    <h1>Edit product: {{$product->name}}</h1>
    <form action="{{route ('product.update', $product->id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{$product->name}}" required/>
        <input type="text" name="description" value="{{$product->description}}" />
        <input type="number" name="price" value="{{$product->price}}" required/>
        <input type="submit" value="Update" />
    </form>
</body>
</html>